<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #f3f3f3; }
        .box {
            width: 300px; padding: 20px; margin: 100px auto;
            background: white; border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type=text], input[type=password] {
            width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc;
        }
        input[type=submit] {
            width: 100%; padding: 10px; background: #007bff; 
            color: white; border: none; cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h3 style="text-align:center;">Login</h3>

    <?php if($this->session->flashdata('error')): ?>
        <p style="color:red;text-align:center;">
            <?= $this->session->flashdata('error'); ?>
        </p>
    <?php endif; ?>

    <form action="<?= base_url('login/proses'); ?>" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
