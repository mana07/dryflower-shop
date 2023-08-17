<!--
Template Name: コンタクト
-->
<?php get_header(); ?>
    <main>
      <article>
        <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/contact main.png" alt="新聞紙と白いドライフラワー">
        <section id="contact">
          <div class="sub-title">
            <h2 id="item-h2" class="title-h2">ご予約</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 100px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
          </div>

          <form >
            <div  style="margin-top: 30px;">
              <div class="contact-heading">
                <label class="contact-label">お名前<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="name" type="text" name="name" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">ふりがな<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="hurigana" type="text" name="hurigana" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">電話番号<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="tel" type="tel" name="tel" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">メールアドレス<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="mail" type="email" name="mail" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">予約希望日<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="contact-date" type="date" name="date" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">希望時間<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <select name="time">
                  <option value="10:00-12:00">10:00-12:00</option>
                  <option value="14:00-16:00">14:00-16:00</option>
                  <option value="17:00-19:00">17:00-19:00</option>
                </select>
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">備考欄</label>
              </div>
              <div>
                <textarea id="message" class="contact-textarea" placeholder="何か事前に伝えておきたいことなどございましたらこちらにお願い致します。" name="message"></textarea>
              </div>
            </div>

            <div id="submit-block" class="contact-form">
              <input id="submit-button" type="image" name="submit" src="<?php echo get_template_directory_uri(); ?>/images/submit button.png" alt="送信する">
            </div>
          </form>
          <div class="sub-title">
            <h2 id="item-h2" class="title-h2">お問い合わせ</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 100px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
          </div>
          <form >
            <div  style="margin-top: 30px;">
              <div class="contact-heading">
                <label class="contact-label">お名前<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="name" type="text" name="name" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">ふりがな<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="hurigana" type="text" name="hurigana" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">電話番号<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="tel" type="tel" name="tel" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">メールアドレス<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="mail" type="email" name="mail" placeholder="入力してください" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">予約希望日<span class="contact-span">必須</span></label>
              </div>
              <div class="contact-form">
                <input id="contact-date" type="date" name="date" class="contact-textbox">
              </div>
            </div>

            <div>
              <div class="contact-heading">
                <label class="contact-label">お問い合わせ内容</label>
              </div>
              <div>
                <textarea id="message" class="contact-textarea" placeholder="お問い合わせの内容をこちらに記述してください。" name="message"></textarea>
              </div>
            </div>

            <div id="submit-block" class="contact-form">
              <input id="submit-button" type="image" name="submit" src="<?php echo get_template_directory_uri(); ?>/images/submit button.png" alt="送信する">
            </div>
          </form>
        </section>
       
      </article>
     
    </main>
   
    <?php get_footer(); ?>
    <a id="back-btn" class="fade" href="#">TOP</a>
  </body>
</html>