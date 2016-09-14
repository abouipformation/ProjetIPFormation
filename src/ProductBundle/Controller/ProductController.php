<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/09/16
 * Time: 11:42
 */

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ProductController extends Controller
{
    /**
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        /*$product = [
            'id' => $id,

        ];
        */
        $product = new \stdClass();
        $product->id = $id;
        $product->name = 'Telephone';
        $product->price = 123;

        return $this->render('ProductBundle:Product:show.html.twig', ['product' => $product]);

    }

}