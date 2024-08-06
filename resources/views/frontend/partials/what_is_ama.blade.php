<style>
    .whatIsAmaPopupPS {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        background-color: rgb(0, 0, 0, 0.85);
        z-index: +100;
        /* background-image: url("../img/home page/Group 42131.png"); */
        color: white;
        display: flex;
        flex-direction: column;
        padding: 10px 150px;
    }


    .whatIsAmaPopupPS>section:nth-of-type(1) {
        display: flex;
        align-items: flex-start;
        padding: 15px 0px;
    }


    .whatIsAmaPopupPS>section:nth-of-type(1)>div:nth-of-type(1) {
        flex: 1;
        font-size: 3.5rem;
        font-weight: 600;
    }

    .whatIsAmaPopupPS>section:nth-of-type(1)>div:nth-of-type(2) span {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 1.2rem;
        background-color: white;
        color: black;
        cursor: pointer;
    }


    .whatIsAmaPopupPS>section:nth-of-type(2) {
        flex: 1
    }

    .whatIsAmaPopupPS .contentSection {
        overflow-y: auto;
        padding: 0px 50px 100px 0px;
    }

    .whatIsAmaPopupPS .paragraphUnit {
        margin: 15px 0px 60px 0px;
    }

    .whatIsAmaPopupPS .paragraphUnit h2 {
        font-size: 1.65rem;
        margin-block: 10px;
    }

    .whatIsAmaPopupPS .paragraphUnit hr {
        width: 35px;
        height: 0.55rem;
        border-radius: 50px;
        background-color: red;
        border: 0px;
        outline: none;
    }

    .whatIsAmaPopupPS .paragraphUnit p {
        font-family: "Poppins", sans-serif;
        font-size: 1.5rem;
        font-weight: 500;
        margin: 15px 0px;
    }

    .whatIsAmaPopupPS .paragraphUnit ul {
        padding: 0px 0px 0px 35px;
    }

    .whatIsAmaPopupPS .paragraphUnit li {
        font-family: "Poppins", sans-serif;
        font-size: 1.5rem;
        font-weight: 500;
        margin: 0px 0px 15px 0px;
        list-style-type: disc;
    }

    .whatIsAmaPopupPS .lowerInfo {
        padding: 15px 10px;
        border: 3px solid red;
        font-size: 1.5rem;
        font-weight: 500;
    }

    @media (max-width: 700px) {
        .whatIsAmaPopupPS {
            padding: 15px;
        }
    }
</style>

<section class="whatIsAmaPopupPS">
    <section class="headerSection">
        <div>What is ALMayeeyah</div>
        <div> <span> <i class="material-icons">close</i></span> </div>
    </section>
    <section class="contentSection">
        <div class="paragraphUnit">
            <h2>Who are we1?</h2>
            <hr>
            <p>The Arabic Club for Kids offers an After School Club for primary aged children. , meaning Togetherness, will offer fun, games and active learning after school, in a spirit of
                inclusiveness, respect and equality.</p>
        </div>

        <div class="paragraphUnit">
            <h2>What are we offering?</h2>
            <p>Our vision is to create a fun and inclusive environment to celebrate Arabic language and culture and aims to infuse enthusiasm and a positive attitude towards the Arabic language.</p>
        </div>

        <div class="paragraphUnit">
            <h2>How will we achieve that vision?</h2>
            <ul>
                <li>We offer a fun way to develop language skills and self-confidence to use Arabic no matter what the language of the home. All are equally welcome - children whose family speak
                    Arabic, have a heritage connection and children who are new to the language.</li>
                <li>in a caring, child-centred environment, children will develop spoken language through their play, communication and socialisation with other club members. We actively promote care
                    and respect for one another regardless of the language used at home or birthplace.</li>
                <li>Our approach supports children to participate with confidence and enjoy themselves. Arabic is taught using fun and active ways of hearing and using the language. The aim is to
                    encourage children to learn Arabic in the same way they learned to speak the language used at home - by participating. We willcelebrate and promote awareness, appreciation and
                    understanding of the diverse peoples and cultures of the Arabic-speaking world.</li>
                <li>Foster active relationships with parents with termly celebrations showcasing progress.</li>
                <li>Celebrate and promote awareness, appreciation and understanding of the diverse peoples and cultures of the Arabic-speaking world.</li>
            </ul>
        </div>
        <div class="paragraphUnit">
            <h2>What to expect?</h2>
            <p>Each session will be themed to offer continuity to learning vocabulary and language structures. Activities across the year will include:</p>
            <ul>
                <li>Spoken and written language activities</li>
                <li>Team games and activities</li>
                <li>Learning about Arab countries and famous cultural places</li>
                <li>Preparing and eating food from Arabic-speaking countries</li>
                <li>Learning about and engaging in some of the celebrations and holidays of those countries</li>
                <li>Listening to and learning about Arabic music and learning to sing songs in Arabic</li>
                <li>Playing active games and action songs to develop phrases and vocabulary</li>
                <li>Drama and role-play activities</li>
                <li>Story-telling activities</li>
            </ul>
        </div>

        <div class="lowerInfo">
            For more information and to arrange an appointment to discuss how to bring to your school1
        </div>
    </section>
</section>
