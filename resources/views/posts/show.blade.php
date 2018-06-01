@extends('layouts.master')

@section('content')
<main role="main" class="container">
  <div class="row">
     <div class="col-md-12 blog-main">
         <div class="card">
             <div class="card-body">
                <div class="blog-post">
                  <h2 class="blog-post-title">Sample blog post</h2>
                  <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                  <hr>
                  <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                  <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  </blockquote>
                  <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                  <h2>Heading</h2>
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <h3>Sub-heading</h3>
                  <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <pre><code>Example code block</code></pre>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                  <h3>Sub-heading</h3>
                  <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                  <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                  </ul>
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                  <ol>
                    <li>Vestibulum id ligula porta felis euismod semper.</li>
                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                    <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                  </ol>
                  <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                </div><!-- /.blog-post -->
              </div><!-- /.blog-main -->
          </div>
      </div>
  </div><!-- /.row -->
  
  <div class="row mt-3">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-body">

                  <form>
                    <div class="form-group">
                      <label for="comment">Comment</label>
                      <textarea name="comment" class="form-control" rows="8" cols="80"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="row mt-3">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                  User at 20-30-2014
              </div>
              <div class="card-body">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
          </div>
      </div>
  </div>
</main><!-- /.container -->
@endsection
