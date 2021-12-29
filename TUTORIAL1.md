# How to use SMTP Gmail like mailers in Laravel App

In this tutoriel, we go to see how to send email with gmail from laravel app

## Step 1: Setting your Gmail account or Create App passwords

Google may block sign-in attempts from some apps or devices that do not use modern security standards. If you have to allow an application to access your Google account, you can disable this security block or create the Google app password.

### 1st Case: Authorize access to your Google account

In this case,

1- Sign in to your [Gmail](https://mail.google.com) Account.

2- [Click here to access Less Secure App Access](https://myaccount.google.com/intro/security) in My Account.

3- Next to **"Allow less secure apps: OFF"**,select the toggle switch to turn **ON**.

### 2nd Case: Created the Google app password for the Gmail account

When you ***2-Step Verification (2FA) is enabled***, some apps like Laravel or devices may be blocked from accessing your Google Account. App passwords are a way to let the blocked app or device access your Google Account.

This is procedure to get this  ***App passwords*** :

1- Access your Google account manager at the following link:[https://myaccount.google.com/intro/security](https://myaccount.google.com/intro/security)

2- On the left navigation panel, choose **Security**.

3- On the **Signing in to Google** panel, choose **App passwords**.

4- At the bottom, choose **Select app** and choose **Other (Custom name)** to enter your application name

5- Choose Generate.

6- Follow the instructions to enter the app password. The app password is the 16-character code in the yellow bar on your device.

7- Choose **Done**.

## Step 2: Setting .env file

Fill in the SMTP configuration information to the .env file of the Laravel project

```MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=587
MAIL_USERNAME=youraddress@gmail.com
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=youraddress@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Step 3: Setting config/Mail.php file

In smtp add the stream array config like below:

```'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,

            'stream' => [
                'ssl' => [
                    'allow_self_signed' => true,
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ],

        ],
```

## Thank you

Just go to the file vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php
and comment out the code $options = [];
and paste the code $options['ssl'] = array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true);
