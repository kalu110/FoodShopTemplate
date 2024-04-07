  <footer class="footer">
        <div class="row align-items-center  text-center">
          <div class="col-12">
            <div class="copyright text-center text-muted">
              &copy; <span id="yearFooter"></span> <a href="{{asset('/')}}" class="font-weight-bold ml-1" target="_blank">Restoran Franš</a>
            </div>
          </div>
        </div>
      </footer>

      <script>
        
        let html = document.querySelector('#yearFooter');
        let dt = new Date();
        html.innerHTML = dt.getFullYear();
      </script>