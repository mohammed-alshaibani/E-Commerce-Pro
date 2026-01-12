<?php

namespace Database\Seeders;

use App\Models\PaymentGateway;
use Illuminate\Database\Seeder;

class PaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentGateway::truncate();
        $paymentMethods = [
            [
                'title' => 'Stripe',
                'name' => 'stripe',
                'config' => json_encode([
                    'secret_key' => 'sk_test_YOUR_STRIPE_SECRET_KEY_HERE',
                    'published_key' => 'pk_test_YOUR_STRIPE_PUBLISHED_KEY_HERE',
                ]),
                'mode' => 'test',
                'alias' => 'Stripe',
                'is_active' => true,
            ],
            [
                'title' => 'PayPal',
                'name' => 'paypal',
                'config' => json_encode([
                    'client_id' => 'YOUR_PAYPAL_CLIENT_ID_HERE',
                    'client_secret' => 'YOUR_PAYPAL_CLIENT_SECRET_HERE',
                ]),
                'mode' => 'test',
                'alias' => 'PayPal',
                'is_active' => true,
            ],
            [
                'title' => 'Razorpay',
                'name' => 'razorpay',
                'config' => json_encode([
                    'key' => 'YOUR_RAZORPAY_KEY_HERE',
                    'secret' => 'YOUR_RAZORPAY_SECRET_HERE',
                ]),
                'mode' => 'test',
                'alias' => 'Razorpay',
                'is_active' => true,
            ],
            [
                'title' => 'Paystack',
                'name' => 'paystack',
                'config' => json_encode([
                    'public_key' => 'YOUR_PAYSTACK_PUBLIC_KEY_HERE',
                    'secret_key' => 'YOUR_PAYSTACK_SECRET_KEY_HERE',
                    'machant_email' => '',
                ]),
                'mode' => 'test',
                'alias' => 'PayStack',
                'is_active' => true,
            ],
            [
                'title' => 'aamarPay',
                'name' => 'aamarpay',
                'config' => json_encode([
                    'store_id' => 'YOUR_AAMARPAY_STORE_ID_HERE',
                    'signature_key' => 'YOUR_AAMARPAY_SIGNATURE_KEY_HERE',
                ]),
                'mode' => 'test',
                'alias' => 'AamarPay',
                'is_active' => true,
            ],
            [
                'title' => 'BKash',
                'name' => 'bKash',
                'config' => json_encode([
                    'username' => 'YOUR_BKASH_USERNAME_HERE',
                    'password' => 'YOUR_BKASH_PASSWORD_HERE',
                    'app_key' => 'YOUR_BKASH_APP_KEY_HERE',
                    'app_secret_key' => 'YOUR_BKASH_APP_SECRET_KEY_HERE',
                ]),
                'mode' => 'test',
                'alias' => 'Bkash',
                'is_active' => true,
            ],
            [
                'title' => 'PayTabs',
                'name' => 'paytabs',
                'config' => json_encode([
                    'base_url' => 'https://secure-global.paytabs.com',
                    'profile_id' => 'YOUR_PAYTABS_PROFILE_ID_HERE',
                    'server_key' => 'YOUR_PAYTABS_SERVER_KEY_HERE',
                    'currency' => 'USD',
                ]),
                'mode' => 'test',
                'alias' => 'PayTabs',
                'is_active' => true,
            ],
        ];

        PaymentGateway::insert($paymentMethods);
    }
}

// 'username' => '01568706310',
// 'password' => 'v5oXk*iP1!.',
// 'app_key' => 'ye5xaQtmhyRvDM0rjDE1LInftc',
// 'app_secret_key' => '25mMaTSUzuHSndUPnCUrkKvWmT5SBX7weFeHB3rXiU5niQedAtQ0'

// rozorpay live key
// 'key' => 'rzp_live_vtkweI0Rai8i7f',
// 'secret' => 't4SN962X1gjHYZbSzltlCvVS',
