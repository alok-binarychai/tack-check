<style>
    .memberMoreInfoPopupWrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .memberMoreInfoPopupWrapper .headerSection {
        display: flex;
        align-items: center;
    }

    .memberMoreInfoPopupWrapper .headerSection >div:nth-of-type(1){
        flex: 1;
    }

    .memberMoreInfoPopupWrapper .headerSection > div:nth-of-type(2) span {
        padding: 10px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<section class="memberMoreInfoPopupWrapper">
    {{-- header section --}}
    <div class="headerSection">
        <div></div>
        <div><span><i class="material-icons">close</i></span></div>
    </div>
    <div class="bodySection">
        {{-- all the content here --}}
        <div>
            {{  }}
        </div>
    </div>
</section>