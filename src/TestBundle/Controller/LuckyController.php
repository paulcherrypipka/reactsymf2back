<?php

namespace TestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class LuckyController
 * @package TestBundle\Controller
 */
class LuckyController extends Controller
{
    /**
     * @param $count
     * @param bool $need_array
     * @return array|string
     */
    private function __format_params($count, $need_array = FALSE)
    {
        $out = 'Incorrect params format';
        if (is_numeric($count)) {
            $nums = array();
            for($i = 0; $i < $count; $i ++) {
                $number = rand(0, 100);
                $nums[] = $number;
            }
            if ($need_array) {
                return $nums;
            }
            $out = implode(', ', $nums);
        }
        return $out;
    }

    /**
     * @param $count
     * @return Response
     */
    public function numberAction($count)
    {
        return $this->render('lucky/number.html.twig', array(
             'luckyNumberList' => $this->__format_params($count)
        ));
    }

    /**
     * @param $count
     * @return JsonResponse
     */
    public function apiNumberAction($count)
    {
        $data = $this->__format_params($count, TRUE);
        return new JsonResponse($data);
    }
}