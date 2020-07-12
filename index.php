>?<?php

interface PaymentInterface {
public function payNow(){}
}
interface LogInInterface {
public function loginFirst();
}


class Paypal implements PaymentInterface , LogInInterface {
  public static function loginFirst(){}
  public static function payNow(){}
    public static function paymentProcess(){
      $this->loginFirst();
      $this->payNow();
    }
}
class BankTransfer implements PaymentInterface , LogInInterface {
  public static function loginFirst(){}
  public static function payNow(){}
    public static function paymentProcess(){
      $this->loginFirst();
      $this->payNow();
    }
}
class Visa implements PaymentInterface{
  public static function payNow(){}
    public static function paymentProcess(){
      $this->payNow();
}
class Cash implements PaymentInterface {
  public static function payNow(){}
    public static function paymentProcess(){
      $this->payNow();
}


class BuyProduct{
  public function pay(PaymentInterface $paymentType){
    $paymentType->paymentProcess();
  }
}


$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct -> pay($paymentType );


 ?>
