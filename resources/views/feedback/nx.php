<?hh
class :layouts:master extends :x:elements {
    public function render()
    {
        return
            <x:doctype>
                <html>
                    <head>
                        <meta charset="utf-8">
                        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name='viewport'>
                        <meta name="csrf-token" content="{{ csrf_token()  }}" />
                        <title>Peer Feedback | {{ $page_title }}</title>
                        <link rel="stylesheet" href="/css/app.css" type="text/css" />
                    </head>

                    {$this->getChildren()}
                </html>
            </x:doctype>;
    }
}

echo
    <layouts:master>
        <h1>New Peer Feedback</h1>
    </layout:master>;
