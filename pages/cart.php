<style>
    /* COntainer center */
    .cart__container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 80%;
    }

    .cart__content{
        width: 100%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

   
    th {
        background-color: #519872;
        color: #fff;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .total-row {
        background-color: #f0f0f0;
        font-weight: bold;
    }

    input[type="number"] {
      padding: 8px;
      width: 50px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 13px;
      text-align: center;
      box-sizing: border-box;
      outline: none;
    }


    /* Optional: Add focus style */
    input[type="number"]:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .delete-button,
    .edit-button {
      padding: 6px 10px;
      font-size: 12px;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      outline: none;
    }

    .delete-button {
      background-color: #dc3545; /* Bootstrap danger color */
    }

    .edit-button {
      background-color: #007bff; /* Bootstrap primary color */
    }

    /* Hover styles */
    .delete-button:hover {
      background-color: #c82333; /* Darker red for hover */
    }

    .edit-button:hover {
      background-color: #0056b3; /* Darker blue for hover */
    }

       /* Alert */

    .alert {
    padding: 20px;
    margin: 15px;
    border-radius: 5px;
    }

    .success {
    background-color: #0fe942;
    color: #edf0ed;
    border: 1px solid #f3f6f3;
    }

    .closebtn-success {
    margin-left: 15px;
    color: #4CAF50;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
    }

    .closebtn-success:hover {
    color: #205B35;
    }

    .danger {
    background-color: #f73e3e;
    color: #f59797;
    border: 1px solid #f3f6f3;
    }

    .closebtn-danger {
    margin-left: 15px;
    color: #cb1313;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
    }
</style>
<section class="section__container cart__container" id="cart">

    <div class="cart__content">
        <?php
            if(isset($_GET['stt'])) {
                if($_GET['stt'] == 'success') {
                  echo '<div class="alert success">
                  <strong>Success!</strong> '.$_GET['msg'].'.
                </div>';
                }
            }
        ?>
        <p class="section__subheader">CART</p>
        <h2 class="section__header">List your products</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th style="width: 160px;">#</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // list cart items
                    $sql = "SELECT * FROM cart inner join product on cart.product_id = product.id WHERE customer_id = '$_SESSION[id]'";
                    $result = mysqli_query($conn, $sql);
                    $total = 0;
                    while($row = mysqli_fetch_assoc($result)) {
                       
                ?>
                <tr>
                    <form action="pages/act/updatecart.php" method="post">
                    <td><?php echo $row['title']; ?></td>
                    <td><input type="number" name="qty" value="<?php echo $row['qty']; ?>" min="1" max="<?php echo $row['stock'];?>"></td>
                    <td><?php echo number_format($row['price'], 0, '.', ','); ?></td>
                    <td><?php echo number_format($row['subtotal'], 0, '.', ','); ?></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $row['cart_id']; ?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                        <a href="pages/act/deletecart.php?id=<?php echo $row['cart_id']; ?>"><button type="button" class="delete-button">Remove</button></a>
                        <button type="submit" class="edit-button">Update</button>
                    </td>
                    </form>
                </tr>
                <?php
                        $total = $total + $row['subtotal'];
                    }
                ?>
                <tr class="total-row">
                    <td colspan="3">Total</td>
                    <td><?php echo number_format($total, 0, '.', ','); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5" style="text-align: right;"><a href="?page=transaction_form"><button type="button" class="btn">Checkout</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>