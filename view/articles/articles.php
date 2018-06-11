<h1>Articles</h1>

<?php
if( isset( $datas[ 'articles' ] ) )
{
    while( $row = $datas[ 'articles' ]->fetch_array() )
    {
    ?>
        <article>
            <h2><a href="<?php echo SITE_URL; ?>/index.php?page=article_detail&action=detail&id=<?php echo $row[ 'IdArticle' ]; ?>"><?php echo $row[ 'TitleArticle' ]; ?></a></h2>
            <p>
                <?php echo $row[ 'IntroArticle' ]; ?>
                <a href="article_form/delete/<?php echo $row[ 'IdArticle' ]; ?>">Efface</a><a href="<?php echo SITE_URL; ?>/articles/delete/23">Efface</a>
            </p>
        </article>
    <?php
    }
}
