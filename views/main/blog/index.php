<?php
  include_once('views/main/navbar.php');
?>
  <!-- ======= Breadcrumbs ======= -->

  <main id="main">
    <!-- Modal here -->
    <!-- Modal 1-->
    <?php
    foreach ($recent as $news)
    {
      echo '
      <div class="modal fade my-5 py-5" id="modal-' . $news->id . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
          <div class="modal-content">
            <div class="modal-body">
              <!-- ======= Blog Single Section ======= -->
              <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
  
                  <div class="row">
  
                    <div class="col-lg-12 entries">
  
                        <!-- Blog entry -->
                        <article class="entry entry-single">
  
                          <h2 class="entry-title">
                            ' . $news->title . '
                          </h2>
  
                          <div class="entry-meta">
                            <ul>
                              <li class="d-flex align-items-center"><i class="bi bi-clock mx-2"></i><time>' . date("F j, Y, g:i a", strtotime($news->date)) . '</time></li>
                              <li class="d-flex align-items-center"><i class="bi bi-chat-dots mx-2"></i>' . count($news->comments) . ' Comments</li>
                            </ul>
                          </div>
  
                          <div class="entry-content">
                            <p>
                              ' . $news->content . '
                            </p>
                          </div>
  
                        </article><!-- End blog entry -->
                      
  
                        <div class="blog-comments">
  
                          <h4 class="comments-count">' . count($news->comments) . ' Comments</h4>';
                          foreach ($news->comments as $comment)
                          {
                            echo '
                            <div id="comment-' . $comment->id . '" class="comment">
                              <div class="d-flex">
                                <div>
                                  <h5><p style="font-weight: bold">' . $comment->user_name . '</p> </h5>
                                  <time>' . date("F j, Y, g:i a", strtotime($comment->date)) . '</time>
                                  <p>
                                  ' . $comment->content . '
                                  </p>
                                </div>
                              </div>
                            </div>';
                          }

                          echo '
                          <div class="reply-form">
                            <h4>Bình luận</h4>
                              <div class="row">
                                <div class="col form-group">
                                  <textarea name="comment" class="form-control" placeholder="Viết bình luận tại đây"></textarea>
                                </div>
                              </div>
                              <button style="background-color: #0d6efd; color: white;" class="btn btn-primary btn-comment" data-news=' . $news->id . ' data-parent="" data-user="' . @$_SESSION["guest"] . '">Gửi bình luận</button>
                            </form>
                          </div>
  
                        </div><!-- End blog comments -->
                    </div><!-- End blog entries list -->
                    
  
                  </div>
  
                </div>
              </section><!-- End Blog Single Section -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
          </div>
        </div>
      </div>
      ';
      }
    ?>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container-fluid my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
        <div class="row g-5">

          <div class="col-lg-8 entries">
            <div class="row g-5">
            <!-- Entry -->
            <?php
              
              foreach ($newses as $news) {
                echo '
                  <article class="entry">
                  <div class="col-md-12  wow slideInUp" data-wow-delay="0.1s">
                  <div class="blog-item bg-light rounded  overflow-hidden">
                  <div class="blog-img position-relative overflow-hidden">
                    <h2 class="entry-title my-3 mx-3" data-bs-toggle="modal" data-bs-target="#modal-' . $news->id . '">
                      <a href="#" style="hover: ">' . $news->title . '</a>
                    </h2>
                  </div>
                    <div class="entry-meta my-3">
                      <ul>
                        <li class="d-flex align-items-center my-2"><i class="bi bi-clock px-2"></i> <time>' . date("F j, Y, g:i a", strtotime($news->date)) . '</time></li>
                        <li class="d-flex align-items-center my-2"><i class="bi bi-chat-dots px-2"></i>' . count($news->comments) . ' Bình luận</li>
                      </ul>
                    </div>

                    <div class="entry-content mx-3 mb-5">
                      <p>
                        ' . $news->description . '
                      </p>
                      <div class="read-more">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-' . $news->id . '" id=more' . $news->id . '>
                          Đọc thêm
                        </button>
                      </div>
                    </div>
                  </div>
                  </div>
                  </article><!-- End blog entry -->
                ';
              }
            ?>
            <div style="margin-top: 20px; margin-left: 30%; position: relative;">
            <nav aria-label="Page navigation example">
              <ul class="pagination" >
                <li class="page-item">
                  <a class="page-link" href="index.php?page=main&controller=blog&action=index&pg=1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="index.php?page=main&controller=blog&action=index&pg=1">1</a></li>
                <li class="page-item"><a class="page-link" href="index.php?page=main&controller=blog&action=index&pg=2">2</a></li>
                <li class="page-item"><a class="page-link" href="index.php?page=main&controller=blog&action=index&pg=3">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="index.php?page=main&controller=blog&action=index&pg=2" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            </div>
            </div>
          </div>
          <div class="col-lg-4">

            <div div class="mb-5 wow slideInUp" data-wow-delay="0.1s">

              <h3 class="section-title section-title-sm position-relative pb-3 mb-4">Bài viết gần đây</h3>
              <div class="sidebar-item recent-posts">
              <?php
                foreach ($recent as $news)
                {
                  echo '
                  <div class=" fw-semi-bold align-items-center bg-light px-3 py-3 my-3">
                    <h5><a href="blog-single.html" data-bs-toggle="modal" data-bs-target="#modal-' . $news->id . '" id=more' . $news->id . '>' . $news->title . '</a></h5>
                    <time>' . date("F j, Y, g:i a", strtotime($news->date)) . '</time>
                  </div>
                  ';
                }
              ?>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

        </div>
      </div>
    </section><!-- End Blog Section -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
  </main><!-- End #main -->
<?php
include_once('views/main/footer.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="public/plugins/jquery/jquery.min.js"></script>
<script src="public/js/blog/index.js"></script>