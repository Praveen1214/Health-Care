<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Page</title>
    <link rel="stylesheet" href="../css/payment.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/3789102d06.js" crossorigin="anonymous"></script>
    <title>Medical Portal</title>
    <script src="js.js"></script>

</head>



<div>
<?php 
    include_once 'header.php';
?>



    <Form class="form">
      <div class="form-item">
        Payment amount: Rs.xxxxxxxxx.xx
      </div>

      <div class="form-item">
        <label for="Card name">Card Name</label>
        <input type="text"  id="cname" name="Card name">
      </div>

      <div class="form-item">
        <label for="Card num">Card Number</label>
        <input type="text"  id="cnum" name="Card num">
      </div>

      <div class="form-sub-item">
        <div class="form-item">
          <label for="Card expd1">Card Expire Date</label><br>
          <select name="month">
            <option value="">Month </option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
        </div>

        <div class="form-item">
          <select name="year">
            <option value=""> Year </option>
            <option value="2023">2021</option>
            <option value="2024">2022</option>
            <option value="2025">2023</option>
            <option value="2026">2023</option>
            <option value="2027">2023</option>
          </select>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="form-item">
          <label for="cvc">CVC</label><br>
          <input type="text" class="short" id="cvc" name="cvc">
        </div>

      </div>

      <div>
        <input type="checkbox" id="tick" name="tick">
        <label for="tick"> Save my card for future purchase</label>
      </div>
      <br>

      <div class="form-item">
        <button type="submit" class="btn">Pay</button>
      </div>
    </form>

  </div>





  </div>

  <br>
  <br>
  <br>



  <?php 
    include_once 'footer.php';
?>





