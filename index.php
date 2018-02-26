<!--
 *   MIT License
 *
 *   Copyright (c) 2018 Secure Windows Shell (SWSH)
 *
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *   of this software and associated documentation files (the "Software"), to deal
 *   in the Software without restriction, including without limitation the rights
 *   to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *   copies of the Software, and to permit persons to whom the Software is
 *   furnished to do so, subject to the following conditions:
 *
 *   The above copyright notice and this permission notice shall be included in all
 *   copies or substantial portions of the Software.
 *
 *   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *   IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *   AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *   LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *   OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *   SOFTWARE.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SWSH - Secure Windows Shell</title>
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css?<?php echo rand(); ?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js?<?php echo rand(); ?>" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="main.js?<?php echo rand(); ?>"></script>
</head>

<body>
    <div class="window-wrapper">
        <div class="download-window">
            <span class="anchor close">X</span>
            <h1>Download SWSH</h1>
            <span class="button green" id="btn-dl">Download latest version of SWSH (Beta 3.0)</span>
            <div id="thanks">
                <span id="dl-notice">Thank you for downloading, would you like to contribute to the project?</span>
                <span class="anchor paypal">PayPal</span>,
                <span class="anchor bitcoin">Bitcoin</span>,
                <span class="anchor litecoin">Litecoin</span>,
                <span class="anchor ethereum">Ethereum</span>.</h3>
                <div class="addr-wrapper">
                    <input type="text" class="addr" readonly/>
                </div>
            </div>
            <br>
            <br>
        </div>
        <div class="about-window">
            <span class="anchor close">X</span>
            <h1>About SWSH</h1>
            <p>SWSH is a console application that offers SSH-like connectivity with ease to users which grants them the ability
                to operate remotely on SSH protocol. It is also Open source, so feel free to
                <a href="https://github.com/SecureWindowsShell/SWSH/blob/master/CONTRIBUTING.md" target="_blank">contribute</a>.</p>
            <p>Documentation for SWSH is
                <a href="https://github.com/SecureWindowsShell/SWSH/blob/master/DOCUMENTATION.md" target="_blank">here</a>.</p>
            <p>For any other query, please feel free to
                <a href="mailto:swsh@muzzammil.xyz">contact me</a>.</p>
            <p>It is Licensed under
                <a href="https://github.com/SecureWindowsShell/SWSH/blob/master/LICENSE" target="_blank">GNU GPL v3.0</a>.</p>
            <br>
            <br>
        </div>
    </div>
    <div id="lContainer">
        <div id="loader"></div>
    </div>
    <div id="head-wrapper">
        <div id="head-main">
            <span class="hero-small">SWSH</span>
            <div class="nav">
                <span class="navitem download">Download</span>
                <span class="navitem about">About</span>
                <span class="navitem features">Features</span>
                <span class="navitem contact">Contact</span>
            </div>
        </div>
        <div id="head-mob">
            <span class="hero-small">SWSH</span>
            <div class="nav">
                <span class="navitem download">Download</span>
                <span class="navitem about">About</span>
                <span class="navitem features">Features</span>
                <span class="navitem contact">Contact</span>
            </div>
        </div>
    </div>
    <div id="main-page-wrapper">
        <div id="main-page">
            <center>
                <spacer id="spacer1"></spacer>
                <img id="hero" src="images/hero.png?<?php echo rand(); ?>" />
                <span class="button clear about">About</span>
                <span class="button clear download">Download</span>
                <span class="button clear features">Features</span>
                <span class="button clear github">Source</span>
            </center>
        </div>
    </div>
    <div id="download-page-wrapper">
        <div id="download-page">
            <table>
                <tr>
                    <td class="req dl-td">
                        <div id="dl-content-wrapper">
                            <div id="dl-content">
                                <h1>Download</h1>
                                <div id="sys-req">
                                    <h2>Hardware Requirment:</h2>
                                    <ul>
                                        <li>1 GHz processor</li>
                                        <li>512 MB of RAM</li>
                                        <li>Disk Space: ~4.5 GB (for .NET 4.7)</li>
                                    </ul>
                                    <h2>Framework Requirment:</h2>
                                    <ul>
                                        <li>.NET Framework 4.7 or latest</li>
                                    </ul>
                                    <h2>Supported Operating Systems:</h2>
                                    <ul>
                                        <li>Windows 7 SP1 (x86 and x64)</li>
                                        <li>Windows 8.1 (x86 and x64)</li>
                                        <li>Windows 10 1607+ (x86 and x64)</li>
                                    </ul>
                                </div>
                                <span class="button green dl-swsh">Download SWSH Beta 3.0 </span>
                            </div>
                        </div>
                    </td>
                    <td class="dl-td">
                        <div id="dl-img-wrapper">
                            <img id="dl-img" src="images/screen-main.PNG?<?php echo rand(); ?>" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="features-page-wrapper">
        <div id="features-page">
            <h1 id="head">Features</h1>
            <center>
                <table id="big-table">
                    <tr>
                        <td class="text-right">
                            <h2>True Color support</h2>
                            <p>Displays upto 16 million colors!</p>
                        </td>
                        <td align="center">
                            <img class="right" src="images/screen-color.PNG?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <img class="left" src="images/source.png?<?php echo rand(); ?>">
                        </td>
                        <td class="text-left">
                            <h2>Open Source</h2>
                            <p>SWSH is fully open source!</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <h2>🎉 Tab Completion</h2>
                            <p>`sh[tab]` and tada! `show`! </p>
                            <p>Another [tab] and it will show nicknames!</p>
                        </td>
                        <td align="center">
                            <img class="right" src="images/screen-tab.PNG?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <img class="left" src="images/screen-keygen.PNG?<?php echo rand(); ?>">
                        </td>
                        <td class="text-left">
                            <h2>Integrated SSH RSA key pair generation</h2>
                            <p>swsh-keygen is also open-source!</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <h2>SCP and SFTP support</h2>
                            <p>Upload files to your server. `upload -h` for help.</p>
                        </td>
                        <td align="center">
                            <img class="right" src="images/screen-upload.PNG?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <img class="left logo" src="images/logo-transparent.png?<?php echo rand(); ?>">
                        </td>
                        <td class="text-left">
                            <h2>And many more...</h2>
                            <span class="button green dl-swsh">Download SWSH now!</span>
                        </td>
                    </tr>
                </table>
                <table id="not-so-big-table">
                    <tr>
                        <td class="text-right">
                            <h2>True Color support</h2>
                            <p>Displays upto 16 million colors!</p>
                        </td>
                        <td align="center">
                            <img class="right" src="images/screen-color.PNG?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <h2>Open Source</h2>
                            <p>SWSH is fully open source!</p>
                        </td>
                        <td align="center">
                            <img class="left" src="images/source.png?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <h2>🎉 Tab Completion</h2>
                            <p>`sh[tab]` and tada! `show`! </p>
                            <p>Another [tab] and it will show nicknames!</p>
                        </td>
                        <td align="center">
                            <img class="right" src="images/screen-tab.PNG?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <h2>Integrated SSH RSA key pair generation</h2>
                            <p>swsh-keygen is also open-source!</p>
                        </td>
                        <td align="center">
                            <img class="left" src="images/screen-keygen.PNG?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <h2>SCP and SFTP support</h2>
                            <p>Upload files to your server. `upload -h` for help.</p>
                        </td>
                        <td align="center">
                            <img class="right" src="images/screen-upload.PNG?<?php echo rand(); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <img class="left logo" src="images/logo-transparent.png?<?php echo rand(); ?>">
                        </td>
                        <td class="text-left">
                            <h2>And many more...</h2>
                            <span class="button green dl-swsh">Download SWSH now!</span>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <div id="footer-wrapper">
            <div id="footer">
                <h1>Contact</h1>
                <h3>Contact:
                    <a href="mailto:swsh@muzzammil.xyz" targer="_blank">swsh@muzzammil.xyz</a>
                </h3>
                <h3>Donate:
                    <span class="anchor paypal">PayPal</span>,
                    <span class="anchor bitcoin">Bitcoin</span>,
                    <span class="anchor litecoin">Litecoin</span>,
                    <span class="anchor ethereum">Ethereum</span>.</h3>
                <div class="addr-wrapper">
                    <input type="text" class="addr" readonly/>
                </div>
                <center>
                    <h3 id="coded">&lt&gt with &#10084; by
                        <a href="http://muzzammil.xyz?swsh" target="_blank">Muhammad Muzzammil</a>
                    </h3>
                    <p id="notice">The content of this site is licensed under the
                        <a href="https://github.com/SecureWindowsShell/swsh.muzzammil.xyz/blob/master/LICENSE" target="_blank">The MIT License.</a>
                    </p>
                    <bar></bar>
                </center>
            </div>
        </div>
    </div>
</body>

</html>