@extends('themes.classic.layout')
@section('content')
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
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
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
                © {{ date('Y') }} {{ config('app.name') }}.
            </p>
        </td>
    </tr>
</table>
@endsection
