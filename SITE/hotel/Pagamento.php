<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pagamento
 *
 * @author logonucd
 */
require_once 'Cartao.php';

class Pagamento {

    private $codPagamento, $codCliente, $cartao, $subtotal, $parcelas;

    public function __construct($codPagamento, $codCliente, Cartao $cartao, $subtotal, $parcelas) {
        $this->codPagamento = $codPagamento;
        $this->codCliente = $codCliente;
        $this->cartao = $cartao;
        $this->subtotal = $subtotal;
        $this->parcelas = $parcelas;
    }
    function getCodPagamento() {
        return $this->codPagamento;
    }

    function getCodCliente() {
        return $this->codCliente;
    }

    function getCartao() {
        return $this->cartao;
    }

    function getSubtotal() {
        return $this->subtotal;
    }

    function getParcelas() {
        return $this->parcelas;
    }

    function setCodPagamento($codPagamento) {
        $this->codPagamento = $codPagamento;
    }

    function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    function setCartao($cartao) {
        $this->cartao = $cartao;
    }

    function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    function setParcelas($parcelas) {
        $this->parcelas = $parcelas;
    }


}
