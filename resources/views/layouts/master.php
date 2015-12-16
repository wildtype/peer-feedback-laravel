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
                    </head>
                    <body>
                        {$this->getChildren()}
                    </body>
                </html>
            </x:doctype>;
    }
}
