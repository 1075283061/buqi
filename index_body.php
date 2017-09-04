<?php require_once "./head.php";?>
    <!-- banner -->
    <div class="index_banner">
      <img src="./img/banner.png" alt="banner" class="index_span">
      <img src="./img/index_banner1.jpg" alt="index_banner">
    </div>
    <!-- index_logo -->
    <div class="logo_div">
      <div class="visibility">
        <img src="./img/index_banner1.jpg" alt="visibility">
      </div>
      <div class="index_logo">
        <div class="top_table">
          <div class="top_logo">
            <img src="./img/index_logo.png" alt="logo">
          </div>
        </div>
      </div>
    </div>
     <!-- index_brand -->
    <div class="visibility">
        <img src="./img/index_banner1.jpg" alt="visibility">
    </div>
    <div class="index_body">
      <?php require_once "./header.php";?>
      <!-- index_brand -->
      <section class="index_brand">
        <div class="tem_div">
          <div class="brand_content">
            <div class="brand_title">
              <h2 class="title1">
                <p>
                品牌简介
                </p>
                <span>Brand profile</span>
              </h2>
            </div>
            <p class="content_p">
              布奇是以提花面料产品为主的自主研发和生产销售的综合性品牌。布奇品牌追求的是具有丰富的艺术底蕴，开放、创新的设计，沉淀出细腻的质感与美感，倡导生活走进另一种大气奢华、优雅兼容并蓄的高级姿态。
              <br/>
              Buqi is based on jacquard fabric products based independent research and development and production and marketing of integrated brand. Butch brand is the pursuit of rich artistic heritage, open, innovative design, exquisite texture and beauty of precipitation, advocate the attitude of life into another senior atmosphere of luxury and elegant fully inclusive and equitable.
            </p>
          </div>
        </div>
      </section>
      <!-- index_case -->
      <section class="index_case">
        <div class="tem_div">
          <div class="case_content">
            <div class="case_left">
              <h2 class="title1">
                <p>案例分享</p>
                <span>Case sharing</span>
              </h2>
              <div class="xian"></div>
              <p>推荐组合</p>
              <div class="xian"></div>
              <a href="" class="case_more">MORE+</a>
            </div> 
            <div class="case_right">
              <div class="case_box">
                <div class="case_main">
                  <div class="tem_banner">
                      <div class="owl-carousel owl-theme">
                          <div class="item">
                              <img src="./img/case.jpg" alt="">
                          </div>
                          <div class="item">
                              <img src="./img/case.jpg" alt="">
                          </div>
                          <div class="item">
                              <img src="./img/case.jpg" alt="">
                          </div>
                      </div>
                  </div>
                  <script>
                      $(document).ready(function(){
                          $(".owl-carousel").owlCarousel({
                              items:1
                          });
                      });
                  </script>
                  <div class="case_arrow">
                    <div class="arrow_left">
                    </div>
                    <div class="arrow_right">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- index_product -->
      <section class="index_product">
        <div class="tem_div">
          <div class="product_content">
            <div class="product_table">
              <div class="product_left">
                <img src="./img/product.png" alt="product">
              </div>
              <div class="product_right">
                <div class="product_main">
                  <div class="main_p">
                    <p>布奇窗帘做工精致，安装精细，在设计、生产、制作、安装等全过程中都重视细节，为您的家居增添一份高贵，呈现主人非凡的艺术品位，柔滑的触感、精美的细节、多样的风格，布奇绝对是营造温馨家居的不二之选。
                    </p>
                  </div>
                  <div class="product_xian"></div>
                  <h2 class="title2">
                    <p>产品细节</p>
                    <span>Product details</span>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- index_support -->
      <section class="index_support">
        <div class="tem_div">
          <div class="support_content">
            <div class="support_table">
              <div class="support_left">
                <div class="service">
                  <span>
                    安装报修
                  </span>
                  <p>
                  尊敬的用户，您好!<br/>
                  请准确填写产品安装、报修信息，提交完成后我们会尽快处理，您可通过反馈的编号在服务进度跟踪页面查询申请处理状态。
                  </p>
                </div>
                <h2 class="title2">
                  <p>服务支持</p>
                  <span>Service support</span>                 
                </h2>
              </div>
              <div class="support_right">
                <img src="./img/design.jpg" alt="design">
                <p class="support_right_p">布奇设计将世界各地的设计风尚完美的呈现给中国消费者</p>
                <h2 class="title2">
                  <p>设计支持</p>
                  <span>Design support</span>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php require_once "./footer.php";?>
    </div>
</body>
</html>  