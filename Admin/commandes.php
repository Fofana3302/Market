<?php 
session_start();
?>
<?php include('includes/header.php');
include('includes/navbar.php');

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Commandes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Age</th>
                    <th>Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><img style="height: 50px; width: 60px;" src="assets/img/product-3.jpg" alt=""></td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td><img style="height: 50px; width: 60px;" src="assets/img/product-3.jpg" alt=""></td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  <!-- ======= Basic Modal ======= -->

    <div class="modal fade" id="basicModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Ajout d'une nouvelle catégorie</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <!-- Vertical Form -->
             <form class="row g-3">
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Libellé </label>
                <input type="text" class="form-control" id="inputNanme4">
              </div>
             
              <div class="text-center">
                <button type="reset" class="btn btn-secondary">Rénitialiser</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
                
              </div>
            </form><!-- Vertical Form -->
           
         </div>
        </div>
      </div>
    </div><!-- End Basic Modal-->
    
  </main><!-- End #main -->

  <?php 
  include('includes/scripts.php');
  include('includes/footer.php');

?>