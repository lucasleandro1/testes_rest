<?php


use PHPUnit\Framework\TestCase;
use app\Cart;
use app\Product;

class CartTest extends TestCase
{
    private $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }

    public function testAddProduct()
    {
        $product = new Product();
        $product->setId(1);
        $product->setPrice(10.99);
        $product->setQuantity(2);

        $this->cart->add($product);

        $cartItems = $this->cart->getCart();
        $this->assertCount(1, $cartItems);
        $this->assertEquals(1, $cartItems[0]->getId());
    }

    public function testAddExistingProduct()
    {
        $product = new Product();
        $product->setId(1);
        $product->setPrice(10.99);
        $product->setQuantity(2);

        $this->cart->add($product);

        $existingProduct = new Product();
        $existingProduct->setId(1);
        $existingProduct->setPrice(10.99);
        $existingProduct->setQuantity(2);

        $this->cart->add($existingProduct);

        $cartItems = $this->cart->getCart();
        $this->assertCount(1, $cartItems);
        $this->assertEquals(1, $cartItems[0]->getId());
    }

    public function testRemoveProduct()
    {
        $product = new Product();
        $product->setId(1);
        $product->setPrice(10.99);
        $product->setQuantity(2);

        $this->cart->add($product);

        $this->cart->remove(1);

        $cartItems = $this->cart->getCart();
        $this->assertCount(0, $cartItems);
        $this->assertEquals(0, $this->cart->getTotal());
    }
}






