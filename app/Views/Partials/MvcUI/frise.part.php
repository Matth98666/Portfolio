
<style>
        *,

        a {
          color: inherit;
        }

        body {
          font: normal 16px/1.5 "Helvetica Neue", sans-serif;
          background: #fff;
          color: #fff;
        }


        /* TIMELINE
        –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline {
          white-space: nowrap;
          background-color: #456990;
          overflow-x: hidden;
        }

        .timeline ol {
          font-size: 0;
          width: 100vw;
          padding: 250px 0;
          transition: all 1s;
        }

        .timeline ol li {
          position: relative;
          display: inline-block;
          list-style-type: none;
          width: 160px;
          height: 3px;
          background: #f45b69;
        }

        .timeline ol li:last-child {
          width: 280px;
        }

        .timeline ol li:not(:first-child) {
          margin-left: 14px;
        }

        .timeline ol li:not(:last-child)::after {
          content: "";
          position: absolute;
          top: 50%;
          left: calc(100% + 1px);
          bottom: 0;
          width: 12px;
          height: 12px;
          transform: translateY(-50%);
          border-radius: 50%;
          background: #f45b69;
        }

        .timeline ol li div {
          position: absolute;
          left: calc(100% + 7px);
          width: 280px;
          padding: 15px;
          font-size: 1rem;
          white-space: normal;
          color: black;
          background: white;
        }

        .timeline ol li div::before {
          content: "";
          position: absolute;
          top: 100%;
          left: 0;
          width: 0;
          height: 0;
          border-style: solid;
        }

        .timeline ol li:nth-child(odd) div {
          top: -16px;
          transform: translateY(-100%);
        }

        .timeline ol li:nth-child(odd) div::before {
          top: 100%;
          border-width: 8px 8px 0 0;
          border-color: white transparent transparent transparent;
        }

        .timeline ol li:nth-child(even) div {
          top: calc(100% + 16px);
        }

        .timeline ol li:nth-child(even) div::before {
          top: -8px;
          border-width: 8px 0 0 8px;
          border-color: transparent transparent transparent white;
        }

        .timeline time {
          display: block;
          font-size: 1.2rem;
          font-weight: bold;
          margin-bottom: 8px;
        }

        /* TIMELINE ARROWS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline .arrows {
          display: flex;
          justify-content: center;
          margin-bottom: 20px;
        }

        .timeline .arrows .arrow__prev {
          margin-right: 20px;
        }

        .timeline .disabled {
          opacity: 0.5;
        }

        .timeline .arrows img {
          width: 45px;
          height: 45px;
        }

        /* GENERAL MEDIA QUERIES
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        @media screen and (max-width: 599px) {
          .timeline ol,
          .timeline ol li {
            width: auto;
          }
      
          .timeline ol {
            padding: 0;
            transform: none !important;
          }
      
          .timeline ol li {
            display: block;
            height: auto;
            background: transparent;
          }
      
          .timeline ol li:first-child {
            margin-top: 25px;
          }
      
          .timeline ol li:not(:first-child) {
            margin-left: auto;
          }
      
          .timeline ol li div {
            position: static;
            width: 94%;
            height: auto !important;
            margin: 0 auto 25px;
          }
      
          .timeline ol li:nth-child(odd) div {
            transform: none;
          }
      
          .timeline ol li:nth-child(odd) div::before,
          .timeline ol li:nth-child(even) div::before {
            left: 50%;
            top: 100%;
            transform: translateX(-50%);
            border: none;
            border-left: 1px solid white;
            height: 25px;
          }
      
          .timeline ol li:last-child,
          .timeline ol li:nth-last-child(2) div::before,
          .timeline ol li:not(:last-child)::after,
          .timeline .arrows {
            display: none;
          }
        }

        /* FOOTER STYLES
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .page-footer {
          position: fixed;
          right: 0;
          bottom: 20px;
          display: flex;
          align-items: center;
          padding: 5px;
          color: black;
          background: rgba(255, 255, 255, 0.65);
        }

        .page-footer a {
          display: flex;
          margin-left: 4px;
        }
</style>
<h3>Formations</h3><br>
<section class="timeline">
    <ol>
        <li>
            <div>
                <time>2016 - 2018</time> BTS Technique Physique pour l'Industrie et le Laboratoire <br><br>
                Lycée Maurice Janetti <br>
                St Maximin-la-sainte-Baume
            </div>
        </li>
        <li>
            <div>
                <time>2019 - 2020</time> Licence professionnelle Technique du Son et de l'Image<br>
                Spécialité Nouvelles Technologies du Son<br><br>
                UFR INGEMEDIA<br>
                Toulon
            </div>
        </li>
        <li>
            <div>
                <time>Juillet - Novembre 2021</time> Technique de spectacles vivants<br><br>
                Tetraccord <br>
                Marseille 01
            </div>
        </li>
        <li>
            <div>
                <time>Septembre 2022</time> Initiation dans le numérique<br><br>
                Simplon Apple Foundation Program<br>
                Marseille 02
            </div>
        </li>
        <li>
            <div>
                <time>Octobre 2022 - Juin 2023</time> Développement web et web mobile<br><br>
                Simplon <br>
                Marseille 13
            </div>
        </li>

        <li></li>
    </ol>
</section><br>
