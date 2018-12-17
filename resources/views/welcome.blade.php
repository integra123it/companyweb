@extends('layouts.app')

@section('content')

<div id="common-home" class="container">
    @include('about.company')
    @include('about.ecommerce')
    <div class="row">
        <div id="content" class="col-sm-12">
            <p>

            </p>
            <p><strong>E-commerce solutions</strong></p>
            <p>
                Create your online business now. 
                Contact us and we can install, configure and manage one of the listed products below or other preferred by you.
            </p>
            <p>
                <a href="https://www.opencart.com/" target="_blank">
                    <img src="">
                </a>
                
            </p>
            <p>
                <a href="https://www.prestashop.com/en" target="_blank">
                    <img src="https://www.prestashop.com/sites/all/themes/prestashop/images/logo_ps_first.svg" style="vertical-align: bottom; float: none; margin-top: 5px; height: 26px; width: auto;">
                    PrestaShop
                </a>
                is an efficient and innovative e-commerce solution with all the features you need to create an online store and grow your business.
                Manage your products, orders, customer relationships, and track your statistics.
                PrestaShop is one of the world’s most popular e-commerce platforms, and most successful open source projects.
            </p>
            <p>
                <a href="https://www.oscommerce.com" target="_blank">
                    <img src="https://www.oscommerce.com/public/sites/Website/images/oscommerce.png" style="vertical-align: bottom; float: none; margin-top: 5px; height: 26px; width: auto;">
                </a>
                provide you the tools to set up your very own complete and self-hosted online store and website for free to securely
                sell products and services to customers worldwide.
                You have complete access to and total control of your online store and data.
            </p>
            <p><strong>Commercial web sites</strong></p>
            <p>
                Having web site it's not a lux, everyone can have it. It's your business card in the web.
                We can help you to reach out your customers easily, promoting your company and products.
                Your site will be developed according to your needs simplifying your work.
            </p>
            <p><strong>E-accounting</strong></p>
            <ul>
                <li>E-invoice - manage your invoices easily</li>
                <li>Document scheduler - apply your accounting documents in time</li>
                <li>E-office</li>
            </ul>
            <p><strong>E-dentist</strong> - software services for dentists</p>
            <p><strong>Hardware services</strong> - Laptops, Workstations, Servers, Mobiles and everything you need</p>
            <p><strong>Solutions providing and problems solving</strong> - contact us</p>
        </div>
    </div>
</div>

@endsection
