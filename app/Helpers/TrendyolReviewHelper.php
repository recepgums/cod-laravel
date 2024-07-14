<?php
namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class TrendyolReviewHelper
{
    public static function format_date($date_str)
    {
        // Turkish month names to English month names mapping
        $turkish_to_english_month = [
            'Ocak' => 'January',
            'Şubat' => 'February',
            'Mart' => 'March',
            'Nisan' => 'April',
            'Mayıs' => 'May',
            'Haziran' => 'June',
            'Temmuz' => 'July',
            'Ağustos' => 'August',
            'Eylül' => 'September',
            'Ekim' => 'October',
            'Kasım' => 'November',
            'Aralık' => 'December'
        ];

        // Replace Turkish month names with English month names
        foreach ($turkish_to_english_month as $turkish_month => $english_month) {
            $date_str = str_replace($turkish_month, $english_month, $date_str);
        }

        // Convert the date string to a datetime object
        $date_object = \DateTime::createFromFormat("d F Y", $date_str);

        // Format the datetime object to the desired format
        return $date_object->format("Y/m/d");
    }

    public static function convert_trendyol_to_comment_url($trendyol_product_url)
    {
        // Replace the base part of the URL
        $comment_url = str_replace("https://www.trendyol.com/", "https://public-mdc.trendyol.com/discovery-web-socialgw-service/reviews/", $trendyol_product_url);

        // Remove any query parameters
        $comment_url = explode('?', $comment_url)[0];

        // Add "yorumlar" at the end
        $comment_url .= "/yorumlar";

        return $comment_url;
    }

    public static function getReviewsByTrendyolUrl($trendyolUrl, $onlyImages = false, $count = 100)
    {
        $client = new Client();
        $page = 0;
        $total_comments = 0;
        $comments = [];

        $api_url = self::convert_trendyol_to_comment_url($trendyolUrl);

        while ($total_comments < $count) {
            try {
                $response = $client->get($api_url, ['query' => ['page' => $page]]);
                $data = json_decode($response->getBody(), true);

                $html_content = $data['result']['hydrateScript'];
                preg_match('/window\.__REVIEW_APP_INITIAL_STATE__ = ({.*?});/', $html_content, $matches);
                $js_data = json_decode($matches[1], true);

                $rating_and_review = $js_data['ratingAndReviewResponse']['ratingAndReview']['productReviews']['content'] ?? [];

                // if no new comments are received, exit the loop
                if (empty($rating_and_review)) {
                    break;
                }

                foreach ($rating_and_review as $comment) {
                    if ($onlyImages && empty($comment['mediaFiles'])) {
                        continue;
                    }

                    $comments[] = [
                        'rating' => $comment['rate'],
                        'author' => $comment['userFullName'],
                        'content' => $comment['comment'],
                        'photo_url_1' => $comment['mediaFiles'][0]['url'] ?? "",
                    ];

                    $total_comments++;
                    if ($total_comments >= $count) {
                        break;
                    }
                }

                $page++;  // Move to the next page

            } catch (RequestException $e) {
                echo "Failed to fetch data. Error: " . $e->getMessage();
                break;
            }
        }

        return $comments;
    }
}
