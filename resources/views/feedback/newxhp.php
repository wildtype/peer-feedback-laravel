<?hh
class :layouts:master extends :x:element {
    attribute :title;
    public function render()
    {
        return
            <x:doctype>
                <html>
                    <head>
                        <meta charset="utf-8" />
                        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
                        <meta name="csrf-token" content="{ csrf_token()  }" />
                        <title>Peer Feedback | {$this->:title}</title>
                        <link rel="stylesheet" href="/css/app.css" type="text/css" />
                        <script src="/js/all.js"></script>
                    </head>
                    <body>
                        {$this->getChildren()}
                    </body>
                </html>
            </x:doctype>;
    }
}

echo
    <layouts:master title={$page_title}>
        <div class="uk-slidenav-position" data-uk-slideshow="">
        <form class="uk-form">
            <fieldset>
                <ul class="uk-slideshow">
                    <li>
                        <div class="form-item">
                            <div class="uk-form-row">
                                <p>Seberapa banyak-kah Anda merasa telah bekerja sama dengan {$page_title} dalam proyek ini? Dalam hal dan cara-cara seperti apa Anda telah bekerja sama dengan {$page_title}?</p>
                                <input type="text" name="pertanyaan1"/>
                            </div>
                        </div>
                    </li>
                    <li><input type="text" name="pertanyaan2"/></li>
                    <li><input type="text" name="pertanyaan3"/></li>
                </ul>
            </fieldset>
        </form>
        <ul class="uk-dotnav uk-position-bottom uk-flex-center">
            <li data-uk-slideshow-item="0"><a href="#">Item1</a></li>
            <li data-uk-slideshow-item="1"><a href="#">Item2</a></li>
            <li data-uk-slideshow-item="2"><a href="#">Item3</a></li>
        </ul>
        </div>
    </layouts:master>;
