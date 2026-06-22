<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: system-ui, sans-serif; background: #f8fafc; padding: 40px; }
        .container { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 16px; padding: 32px; border: 1px solid #e2e8f0; }
        .badge { display: inline-block; background: #eff6ff; color: #2563eb; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: 600; margin-bottom: 16px; }
        .label { font-size: 12px; text-transform: uppercase; color: #64748b; font-weight: 600; letter-spacing: 0.05em; }
        .value { font-size: 15px; color: #1e293b; margin-bottom: 16px; }
        .message-box { background: #f8fafc; border-radius: 12px; padding: 16px; font-size: 14px; color: #334155; line-height: 1.6; white-space: pre-wrap; }
    </style>
</head>
<body>
    <div class="container">
        <div class="badge">New Contact Inquiry</div>
        <p class="label">From</p>
        <p class="value"><strong>{{ $name }}</strong></p>
        <p class="label">Email</p>
        <p class="value"><a href="mailto:{{ $email }}" style="color:#2563eb;">{{ $email }}</a></p>
        <p class="label">Message</p>
        <div class="message-box">{{ $body }}</div>
    </div>
</body>
</html>
