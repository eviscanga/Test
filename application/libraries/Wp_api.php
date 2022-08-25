<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Wp_api {
  var $CI;

  public function __construct()
	{
		log_message('debug', 'WP API Library Loaded.');
		$this->CI =& get_instance();
  }

  /**
   * Query the /posts endpoint; show either a single post or a list of recent posts
   * v2 doc: http://v2.wp-api.org/reference/posts/
   * @param  Int $id page ID
   * @return JSON with the page object/result or a list of page objects
   */
  public function posts($id=NULL) {
    return $this->fetch_response('posts', $id);
  }

  /**
   * Query the /pages endpoint; show either a single page or a list
   * v2 doc: http://v2.wp-api.org/reference/pages/
   * @param  Int $id page ID
   * @return JSON with the page object/result or a list of page objects
   */
  public function pages($id=NULL) {
    return $this->fetch_response('pages', $id);
  }

  /**
   * Query the /categories endpoint; show either a single category or a list
   * v2 doc: http://v2.wp-api.org/reference/categories/
   * @param  Int $id category ID
   * @return JSON with the page object/result or a list of page objects
   */
  public function categories($id=NULL) {
    return $this->fetch_response('categories', $id);
  }

  /**
   * Fetch a WP REST API endpoint and return the JSON result
   * @param  String $endpoint The specific endpoint for the wp-json result
   * @param  Integer $id      If a single object is requested, then pass an $id
   * @return JSON             JSON list or object
   */
  private function fetch_response($endpoint, $id=NULL, $args=NULL) {
    // Create a GuzzleHttp client with a base URI
    $this->client = new GuzzleHttp\Client(['base_uri' => 'https://blog.visitplaces.us/wp-json/wp/v2/']);

    try {
      $request_url = isset($id) ? sprintf('%s/%s', $endpoint, $id) : $endpoint;
      // prepend the args to the url if we detect they are valid GET (?arg=value&arg2=value)
      if ($args && substr($args, 0, 1) == '?'){
        $request_url = $request_url . $args;
      }
      $response = $this->client->get($request_url);
      return $response->getBody()->getContents();
    } catch (GuzzleHttp\Exception\BadResponseException $e) {
      #guzzle response for future use
      $response = $e->getResponse();
      $response_content = $response->getBody()->getContents();
      $json = json_decode($response_content);

      if (isset($json) && isset($json->data->status) && $json->data->status == 404) {
        show_404();
      }

      return $response->getBody()->getContents();
    }
  }

}