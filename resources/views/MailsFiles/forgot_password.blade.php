<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; margin: 0; padding: 20px;">
    <div style="max-width: 600px; background-color: #ffffff; padding: 20px; border-radius: 5px; margin: 0 auto;">
        <h2 style="color: #007bff;">Reset Your Password</h2>
        <p>Hello,</p>
        <p>We received a request to reset the password for your account. Click the link below to reset your password:</p>
        <p>
            <a href="{{ url("/user/password/reset/".$token) }}" style="color: #ffffff; background-color: #007bff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                Reset Password
            </a>
        </p>
        <p>If you did not request a password reset, please ignore this email. Your password will remain unchanged.</p>
        <p>Thank you,<br>Hire Teachers</p>
    </div>
</body>
</html>
