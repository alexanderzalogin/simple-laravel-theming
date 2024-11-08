<html>
<head>
    <link href="{{ asset('cuba/css/style.css') }}" rel="stylesheet">
</head>
<body>
@include('themes.cuba.menu')
<table align="center" border="0" cellspacing="0" cellpadding="0" role="presentation" style="
                color: #1d1d1d;
                font-family: 'Roboto', sans-serif, Arial, Helvetica;
                background: #ffffff;
                margin: 0;
                padding: 0;
                width: 100%;
                max-width: 100%;
                padding-left: 30px;
                padding-right: 30px;
                padding-bottom: 30px;
                ">
    <tr>
        <td align="center">
            <table align="center" border="0" cellspacing="0" cellpadding="0"
                   style="margin: 0; padding: 0; width: 100%; max-width: 540px">
                <tr>
                    <td align="center">
                        <h2>Контакты:</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center">
            <p style="
                            color: #616161;
                            font-family: 'Roboto', sans-serif, Arial, Helvetica;
                            font-size: 14px;
                            font-weight: 400;
                            line-height: 21px;
                            margin-top: 20px;
                            margin-bottom: 0;
                            ">
                © 2009 – {{ date('Y') }} {{ config('app.name') }}.
            </p>
        </td>
    </tr>
</table>
</body>
</html>
