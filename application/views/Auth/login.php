<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #2f80ed, #56ccf2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .login-card {
            width: 380px;
            padding: 30px;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
            animation: fadeIn 0.6s ease;
        }

        .login-title {
            text-align: center;
            font-weight: bold;
            font-size: 26px;
            margin-bottom: 15px;
            color: #333;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0px); }
        }

        .btn-login {
            background: #2f80ed;
            color: white;
        }

        .btn-login:hover {
            background: #1c60bb;
        }
    </style>

</head>
<body>

<div class="login-card">
    <h3 class="login-title">Login</h3>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger text-center">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('auth/login_process'); ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="btn btn-login w-100 mt-2">Login</button>
    </form>
</div>

</body>
</html>
