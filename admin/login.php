<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Desa Pattallassang</title>
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .login-container { margin-top: 100px; max-width: 400px; }
    .btn-primary { background-color: #00BFFF; border: none; }
    .btn-primary:hover { background-color: #0098cc; }
    .card { border-radius: 15px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
  </style>
</head>
<body>

<div class="container d-flex justify-content-center">
  <div class="login-container w-100">
    <div class="card p-4">
      <div class="text-center mb-4">
        <h4 style="color: #00BFFF; font-weight: 700;">ADMIN LOGIN</h4>
        <small class="text-muted">Desa Pattallassang Digital</small>
      </div>
      
      <form action="proses_login.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required placeholder="Masukkan username">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required placeholder="Masukkan password">
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100 py-2">MASUK</button>
      </form>
      
      <div class="text-center mt-3">
        <a href="../index.php" class="text-decoration-none small text-muted">← Kembali ke Website</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>