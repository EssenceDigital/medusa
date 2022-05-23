@extends('layouts.layout4')

@section('title', 'Terms & Disclaimer')

@section('styles')

@endsection

@section('content')

<!-- Header -->
<header id="terms-header" class="header header-inverse">
  <!-- <div class="container">
    <h1 class="display-4">Terms of Use & Disclaimer</h1>
    <p class="lead-2 mt-6">You must agree to our terms of use and disclaimer before proceeding.</p>
  </div> -->
</header>
<!-- END Header -->

<main class="main-content">
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <h1>Terms of Use & Disclaimer</h1>
          <p class="lead-2 mt-6"><strong>You must agree to our Terms of Use and Disclaimer to use the Olympus Suite.</strong></p>

          <hr class="dark-hr" />

          <h4>General Information</h4>
          <p>We collect the e-mail addresses of those who communicate with us via e-mail, aggregate information on what pages consumers access or visit, and information volunteered by the consumer (such as survey information and/or site registrations). The information we collect is used to improve the content of our Web pages and the quality of our service, and is not shared with or sold to other organizations for commercial purposes, except to provide products or services you’ve requested, when we have your permission, or under the following circumstances:</p>

          <ul>
            <li>It is necessary to share information in order to investigate, prevent, or take action regarding illegal activities, suspected fraud, situations involving potential threats to the physical safety of any person, violations of Terms of Service, or as otherwise required by law.</li>
            <li>We transfer information about you if TheSaaS is acquired by or merged with another company. In this event, TheSaaS will notify you before information about you is transferred and becomes subject to a different privacy policy.</li>
          </ul>

          <br>
          <h4>Information Gathering and Usage</h4>
          <ul>
            <li>When you register for TheSaaS we ask for information such as your name, email address, billing address, credit card information. Members who sign up for the free account are not required to enter a credit card.</li>
            <li>TheSaaS uses collected information for the following general purposes: products and services provision, billing, identification and authentication, services improvement, contact, and research.</li>
          </ul>

          <br>
          <h4>Cookies</h4>
          <ul>
            <li>A cookie is a small amount of data, which often includes an anonymous unique identifier, that is sent to your browser from a web site’s computers and stored on your computer’s hard drive.</li>
            <li>Cookies are required to use the TheSaaS service.</li>
            <li>We use cookies to record current session information, but do not use permanent cookies. You are required to re-login to your TheSaaS account after a certain period of time has elapsed to protect you against others accidentally accessing your account contents.</li>
          </ul>

          <br>
          <h4>Data Storage</h4>
          <p>TheSaaS uses third party vendors and hosting partners to provide the necessary hardware, software, networking, storage, and related technology required to run TheSaaS. Although TheSaaS owns the code, databases, and all rights to the TheSaaS application, you retain all rights to your data.</p>

          <br>
          <h4>Disclosure</h4>
          <p>TheSaaS may disclose personally identifiable information under special circumstances, such as to comply with subpoenas or when your actions violate the Terms of Service.</p>


          <br>
          <h4>Changes</h4>
          <p>TheSaaS may periodically update this policy. We will notify you about significant changes in the way we treat personal information by sending a notice to the primary email address specified in your TheSaaS primary account holder account or by placing a prominent notice on our site. Such notice will be given at least 3 days in advance of the date the new policy will be applied.</p>


          <br>
          <h4>Question</h4>
          <p>Any questions about this Privacy Policy should be addressed to privacy@domain.com.</p>


        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">

      <!--
      ^^^^^^^ FORM ^^^^^^^
      -->
      <form action="/confirm-terms" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="purchase_id" value="{{ $purchase_id }}" />

        <div class="row text-center">
          <div class="col-12 mt-20">
            <label class="form-control">
                <input type="checkbox" name="agree_terms" />
                <strong class="dark-strong">I have fully read, completely understood, and agree to the Terms of Use and Disclaimer.</strong>
            </label>
            @error('agree_terms')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="row justify-content-center mt-50">
          <div class="col-4 ">
            <button class="btn btn-block btn-primary" type="submit">Go to Payment <i class="ti-angle-right fs-9"></i></button>
          </div>
        </div>
      </form>
      <!--
      ^^^^^^^ END FORM ^^^^^^^
      -->

    </div>
  </section>
</main>

@endsection
