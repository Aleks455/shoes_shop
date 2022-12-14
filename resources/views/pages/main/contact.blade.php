@extends('layout.layout')

@section('title')
<title>Shop - Contact</title>
@endsection

@section('keywords')
<meta name="keywords" content="shop, online, products" />
@endsection

@section('description')
<meta name="description" content="Contacts of an online shop." />
@endsection

@section('container')
  <!-- Page Content -->
  <div class="container min-vh-100 mt-4">

    <div>
      <h1>About us</h1>
      <hr />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc gravida lorem sed neque rhoncus, 
        id condimentum justo mollis. Aliquam vitae tellus sit amet elit eleifend gravida id placerat elit. 
        Nam pellentesque eros lectus, sit amet scelerisque lectus congue id. Sed sem purus, elementum iaculis 
        cursus eu, congue eget odio. Curabitur vestibulum, purus eget molestie porttitor, nisl nulla ornare 
        eros, eu ultrices odio risus vel lectus. Fusce ultricies massa justo, sed convallis turpis tristique in. 
        Vivamus sit amet tincidunt erat.
      </p>
    </div>

    <div>
      <h1>Contact us</h1>
      <hr />
      <form>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Submit</button>
      </form>
    </div>

  </div>
  <!-- /.container -->

@endsection