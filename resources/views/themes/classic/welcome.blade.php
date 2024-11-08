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

                            <h2>Выберите тему:</h2>
                            <form action="/" method="POST">
                                @csrf
                                <select name="theme">
                                    <option
                                        {{old('theme',$theme)=="themes.classic"? 'selected':''}}  value="themes.classic">
                                        Classic
                                    </option>
                                    <option {{old('theme',$theme)=="themes.cuba"? 'selected':''}} value="themes.cuba">
                                        Cuba
                                    </option>
                                </select>
                                <br><br>
                                <button type="submit">Сохранить</button>
                            </form>
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
    </body>
    </html>
@endsection
