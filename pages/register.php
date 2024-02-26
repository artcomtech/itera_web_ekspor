<style>
    /* COntainer center */
    .register__container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
    }

    input {
      padding: 12px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #519872;
      color: #fff;
      padding: 16px;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #3B5249;
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

.closebtn-success:hover {
  color: #bb0909;
}

</style>
<section class="section__container register__container" id="register">
   
    <div class="register__content">
        <?php
            if(isset($_GET['stt'])) {
                if($_GET['stt'] == 'success') {
                  echo '<div class="alert success">
                  <strong>Success!</strong> '.$_GET['msg'].'.
                </div>';
                }

                if($_GET['stt'] == 'error') {
                  echo '<div class="alert danger">
                  <strong>Error!</strong> '.$_GET['msg'].'.
                </div>';
                }
            }
        ?>
        <p class="section__subheader">REGISTRATION</p>
        <h2 class="section__header">Please fill the form</h2>
        <form action="pages/act/register.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">REGISTER</button>
         </form>

    </div>
</section>

