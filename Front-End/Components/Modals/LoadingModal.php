<?php

echo '
    <section class="loadingModalOff" id="loadingModal">
        <img src="http://localhost/CompanyDirectory/Front-End/Assets/Spinner.gif" />
    </section>
'

?>

<style>

.loadingModalOff {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    margin: auto;
    z-index: 10;
    pointer-events: none;
    position: fixed;
    align-items: center;
    transition: .2s;
    opacity: 0;
}

.loadingModal {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    margin: auto;
    z-index: 10;
    pointer-events: all;
    position: fixed;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.4);
    transition: .2s;
    opacity: 1;
}

.loadingModal img { 
    height: 6em;
    width: 6rem;
}

</style>