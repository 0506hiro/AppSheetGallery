<?php
/**
 * Template Name: お問合せ
 */
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-otoiawase.css">

<main>
  <section class="contact-section">
    <div class="container">
      <div class="contact">
        <h1>お問合せ</h1>
        <p>アプリの使用に関するお問合せは、下記のフォームからご連絡ください。</p>
        <p>※デモアプリの使用にはGmailアドレスが必要です</p>
        <p>お問合せ内容を確認後、担当者よりご連絡いたします。</p>
      <?php
        $form_id = get_contact_form_7_id_by_title( 'アプリ使用問合せ' );
        if ( $form_id ) {
          echo do_shortcode( '[contact-form-7 id="' . $form_id . '" title="アプリ使用問合せ"]' );
        } else {
          echo '<p>Contact Form 7 フォームが見つかりません。</p>';
        }
      ?>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>
