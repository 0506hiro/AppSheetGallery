<?php
/**
 * Template Name: お問合せ
 */
get_header();
?>

<main>
  <section>
    <div class="container">
      <h1>お問合せ</h1>
      <p>お問合せフォームを設置します。</p>
      <?php
        $form_id = get_contact_form_7_id_by_title( 'アプリ使用問合せ' );
        if ( $form_id ) {
          echo do_shortcode( '[contact-form-7 id="' . $form_id . '" title="アプリ使用問合せ"]' );
        } else {
          echo '<p>Contact Form 7 フォームが見つかりません。</p>';
        }
      ?>
    </div>
  </section>
</main>

<?php
get_footer();
?>
