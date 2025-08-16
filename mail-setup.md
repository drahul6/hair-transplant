# Mail Configuration Setup

To enable the contact form email functionality, you need to configure your mail settings in the `.env` file.

## Required Environment Variables

Add these variables to your `.env` file:

```env
# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="HairTransPro Clinic"
MAIL_ADMIN_EMAIL=admin@hairtranspro.com

# For Gmail, you'll need to:
# 1. Enable 2-factor authentication
# 2. Generate an App Password
# 3. Use the App Password instead of your regular password
```

## Alternative Mail Services

### Mailgun
```env
MAIL_MAILER=mailgun
MAILGUN_DOMAIN=your-domain.com
MAILGUN_SECRET=your-mailgun-secret
```

### SendGrid
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key
MAIL_ENCRYPTION=tls
```

### For Development/Testing
```env
MAIL_MAILER=log
```

This will log emails to `storage/logs/laravel.log` instead of sending them.

## Testing the Configuration

After setting up the mail configuration:

1. Fill out the contact form on your website
2. Submit the form
3. Check your admin email for the contact form submission
4. Check the sender's email for a confirmation message

## Troubleshooting

- Check the Laravel logs at `storage/logs/laravel.log`
- Verify your SMTP credentials
- Ensure your email provider allows SMTP access
- For Gmail, make sure you're using an App Password, not your regular password
