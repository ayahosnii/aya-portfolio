<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Message from Contact Form</title>
</head>

<body>
<div style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 1.5;">
    <p style="font-size: 24px; font-weight: bold;">Hello,</p>

    <p style="margin-bottom: 20px;">You have received a new message from the contact form:</p>

    <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd;">
        <tbody>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px;">Name:</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $name }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px;">Email:</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ $email }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 10px;">Message:</td>
            <td style="border: 1px solid #ddd; padding: 10px;">{{ nl2br($message) }}</td>
        </tr>
        </tbody>
    </table>

    <p style="margin-top: 20px;">Thank you!</p>
</div>
</body>

</html>
