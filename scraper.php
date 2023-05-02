<?php
/**
 * PHP Google Scholar Scraper
 * By Teguh Rijanandi 
 */

include_once __DIR__ . '/simple_html_dom.php';

// Google Scholar URL
// https://scholar.google.com/scholar?hl=id&q=Rancang+Bangun+Pembuatan+Game
const GOOGLE_SCHOLAR_URL = 'https://scholar.google.com/scholar';

class Scraper {

    protected static $self;
    protected static $query;

    /**
     * Search query
     *
     * @param array $query
     * @return void
     */
    public static function query(Array $query)
    {
        if (!isset($query['hl']) and !isset($query['q'])) {
            throw new Exception('Query must be contain hl and q');
        }

        self::$query = $query;
        
        return self::$self = new self;
    }

    /**
     * Get search result
     *
     * @return array
     */
    public function get() {
        $url = GOOGLE_SCHOLAR_URL . '?' . http_build_query(self::$query);
        $html = file_get_html($url);
        $result = [];

        foreach($html->find('.gs_r.gs_or.gs_scl') as $element) {
            $title = $element->find('h3.gs_rt a', 0);
            $snippet = $element->find('div.gs_rs', 0);
            $publication_info = $element->find('div.gs_a', 0);
            $cited_by = $element->find('a.gs_nph+ a', 0);
            $pdf_link = $element->find('div.gs_or_ggsm > a', 0);

            $result[] = [
                'title' => $title->plaintext,
                'url' => $title->href,
                'snippet' => $snippet->plaintext,
                'publication_info' => $publication_info->plaintext,
                'cited_by' => rtrim(GOOGLE_SCHOLAR_URL, '/scholar') . $cited_by -> href,
                'pdf_link' => $pdf_link ? $pdf_link->href : null,
                'year' => $this->extract_number_from_string($publication_info->plaintext)
            ];
        }

        return $result;
    }

    private function extract_number_from_string($string) {
        preg_match_all('!\d+!', $string, $matches);
        
        // get last array
        $last_array = end($matches);

        // get last array value
        $last_array_value = end($last_array);

        return $last_array_value;
    }
}