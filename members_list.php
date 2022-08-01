<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
?>
<body>
  <!--header-->
  <?php 
  include('includes/nav.php');
  ?>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">List of All Regstered Members</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Members List </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 ">
      <div class="container py-lg-5">
        <div class="row mt-0">
          <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="membersList">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Contact Desk</th>
                      <th>Email</th>
                      <th>Membership Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>NASPAN</td>
                      <td>Abuja</td>
                      <td> <a href="mailto:info@naspan.com.ng">info@naspan.com.ng</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>JE OILS</td>
                      <td>MR. GBENGA IDOWU</td>
                      <td> <a href="mailto:gbenga.idowu@jeoils.com">gbenga.idowu@jeoils.com</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>NATURALLY TRIBAL</td>
                      <td>SHALOM LLYOD </td>
                      <td> <a href="mailto:shalom@naturallytribalgroup">shalom@naturallytribalgroup</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LADGROUP </td>
                      <td>Mr. ROBERT       OGIRRI       (MD) </td>
                      <td> <a href="mailto:r.ogirri@ladgroup.org">r.ogirri@ladgroup.org</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>OKLAN            BEST   </td>
                      <td>MRS.   ELIZABETH   LANRE    NWANKWO </td>
                      <td> <a href="mailto:oklan2000@yahoo.com">r.oklan2000@yahoo.com</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>HELEN    GENIUS   AGRO PRODUCT LTD   </td>
                      <td>HELEN      OMOWUMI      ODUYEMI </td>
                      <td> <a href="mailto:helenoduyemi@gmail.com">r.helenoduyemi@gmail.com</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SALID            AGRICULTURE    </td>
                      <td>ALI         SAIDU  </td>
                      <td> <a href="mailto:alisaidubala@gmail.com">r.alisaidubala@gmail.com</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>WEST     AFRICAN     SOYA / SHEA NUT   </td>
                      <td>MANISH      KUMAR         ( TGI )  </td>
                      <td> <a href="mailto:manish.kumar@clicktgi.net">manish.kumar@clicktgi.net</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>KORROK       TECHNOLOGIES       LTD    </td>
                      <td>CHINANG   KATHERINE WILLIAMS   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>FAKU   AGRO    ALLIED </td>
                      <td>DAUDA    MOHAMMED    LAWAN   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>NELSAG   ENTERPRISES   INTL   LTD  </td>
                      <td>NELLY   ULOMD   OSAGIE     NDAGUBA</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>DARALKUCHI     INTERNATIONAL    LTD   </td>
                      <td>HAJIYA     ZAINAB   IBRAHIM KUCHI</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SHEA      AGRO      NIGERIA     LIMITED </td>
                      <td>JONATHAN     MAMMAN </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>GAMUT      SHEA       BUTTER</td>
                      <td>RICHARD        AKANMODE  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>HARVEST   STACK   NIG. LTD </td>
                      <td>KEKE   BONGOS IKWUE       (KAYGANICS)  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MULKISHEA    COMMODITY PRODUCTS       LIMITED</td>
                      <td>IBRAHIM        MALIKI   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>AHALIAH    AGRICULTURE BUSINESS LTD </td>
                      <td>AHMED     TARIKA   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ASHMADY   INTEGRATED   SMILE   LTD </td>
                      <td>AISHAT    D      YUSUF   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>YELWA    SHEA   BUTTER GLOBAL ENTRS.</td>
                      <td>USMAN      AMINU   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>GELSON   OPTIMAL   LIMITED .</td>
                      <td>ADEBOLA         AMUJO </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SHEA     ORIGIN </td>
                      <td>MOBOLA     SAGOE  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SOKAIKO         NIGERIA LTD</td>
                      <td>JIBRIL      BOKANI  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>EL-HAZY GLITTAS   LIMITED </td>
                      <td>BETHEL   ONACHUKWU   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ORACLE          FARMS   LIMITED </td>
                      <td>GWAR     SAMEUL     TERUNGWA     </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MENA             AGRO          LTD  </td>
                      <td>JACOB         SHEKARAU     </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MIMI               VENTURES   </td>
                      <td>MRS.     VICTORIA     TARBO    </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>HAYLOF      LIMITED  </td>
                      <td>MRS    OLASUMBO    ADELEKE</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>OPEOLU   DIVINE SEEDS ENTERPRISES  </td>
                      <td>IBUOYE     OPELOYE      ABIGAIL</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>WODUDAT   CO-OPERATE SOCIETY NIG LTD  </td>
                      <td>HAJIA     JUMMAI ABUBAKAR</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>CMAX   SHEA   </td>
                      <td>USMAN MOHAMMED   CHIROMA </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ZINNIA  PRODUCTIONS AND MARKETING    COMPANY LTD </td>
                      <td>BANMA   B.  SULAIMAN  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>BOKADO   GLOBAL LTD </td>
                      <td>OMIKUNLE     BOLARINWA  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>JAMAZ   INVESTMENT </td>
                      <td>FATIMA LAWAL   GULWA  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>FEMADEC     TRADING LTD </td>
                      <td>FOLA        AKINNOLA      </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>FUNMILABOSD   LLC </td>
                      <td>YEYE   OLUFUNMILAYO   OYEWOLE      </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LASEVA   NATURA   LTD </td>
                      <td>MEDINAT KAREEM  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>GRACIOUS         RESOURCES   LTD  </td>
                      <td>BECKY   GADZAMA   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SARAH   NATURE   CLEAR   LTD  </td>
                      <td>GRACE   CHIKAN    </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>RODEA   GLOBAL   ENTERPRISES LTD  </td>
                      <td>AISHA SULEIMAN BAFFA </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LAMCY   GLOBAL   RESOURCES   NIG LTD   </td>
                      <td>HAJIYA   LAILA   H. MUHAMMAD </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>IMOAGENE    ENTERPRISES     </td>
                      <td>HELEN   IMOAGENE </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MELGIA    INVESTMENT   NIGERIA LTD     </td>
                      <td>EVELYN   OTI  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>DAZZLE   SHEA BUTTER   INDUSTRIES LTD  </td>
                      <td>MRS   UBONG   THOMPSON   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MAINSTREM    LIME – LIGHT   LTD </td>
                      <td>MARYAM    YAKUBU    YANAH   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>HMB    AGRO   LTD </td>
                      <td>HAJIYA      HALIMA     BAGUDU    </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SKYBLUE   SOLAR AND   ENVI-MERCHANT   NIG   LTD </td>
                      <td>ADAMU    TUKUR   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>EDENS   WELL    LIMITED </td>
                      <td>YINKA   OSIFESO </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SALSHAHAD   MULTI   COMCEPT LTD </td>
                      <td>SARATU    ASUKU </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ILERA   AGRO   SHEA    PROCESSING COMPANY </td>
                      <td>HAFSAT      BANKOLE </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>DALLATU   AGRO SERVICES AND EXPORT </td>
                      <td>ABUBAKAR   BAGUDU   USMAN  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>BIOTREE   LIMITED     </td>
                      <td>KOLAWOLE   ADEBUSUYI  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SHEATHERAPY   LIMITED    </td>
                      <td>NDIDI   NKWOPARA </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MUDUAFRIKA      LTD   </td>
                      <td>OMO    ISIBOR </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>CELINA   GREENE </td>
                      <td>KUNLE   ONAFOWOKAN   </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ARATI    SHEA </td>
                      <td>DR.  AYODELE     OTAIKU  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LECUSCA    RESOURCES </td>
                      <td>DOLAPO   OLALEKAN  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ONLU    NIG. ENTERPRISE </td>
                      <td>IBRAHIM   RASHEED   AJADI  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SHEA BUNCH   PRODUCT LTD </td>
                      <td>TALATU   IDRIS     ABDULRAZAK  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>P & C QUALITY FOODS LTD </td>
                      <td>MRS.   TINA   AMANAHU  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LUNIK       NIG   ENTERPRISE  </td>
                      <td>GABRIEL    GONI    </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>OLGON   PRIME   ASSURANCE LTD  </td>
                      <td>GAGARIN   MADAKI     </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LIBEAU   LIMITED   </td>
                      <td>MOFOLUWASO      IBIGBAMI  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>NICERT              GROUP  </td>
                      <td>ANNABEL        KAMUCHE     MD) </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>FAMURA   WORLDWIDE   LIMITED  </td>
                      <td>MUHAMMED   B USMAN </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ROYAL CONSOLIDATED INVESTMENT LIMITED   </td>
                      <td>ALHAJI USMAN MUHAMMAD</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>SEVENIST NIGERIA LIMITED   </td>
                      <td>IBUKUN   FATUNMIBI</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>BSS INDUSTRY LIMITED    </td>
                      <td>BAYO SALAWU</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>ABU YUSUF IBN YUSUF GLOBAL RESOURCES LIMITED</td>
                      <td>ABU YUSUF IBN YUSUF</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>EXPORT TRAINING AND MENTORING LIMITED </td>
                      <td>JOHN ISEMEDE</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>FOOD GENERICS AND AGRONOMY LIMITED  </td>
                      <td>MATHEW JANDE</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>AGRO ALLIED FISHERIES & FARMS SERVICE LTD  </td>
                      <td>SEGUN AWOYERA</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>VIC-COE GREAT NIGERIA LIMITED  </td>
                      <td>EDUN MERCY BOLANLE</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>HEALTHWISE RESOURCES LIMITED  </td>
                      <td>CHRISTY LAPINNI</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>BEDAKS KONCEPT LIMITED   </td>
                      <td>MERCY IGHEGHE - AKINWUMI</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>HARA-POKA VENTURES LTD   </td>
                      <td>MR. P.O. OJEKUNLE</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>IGBOAMALU, C.C. NIGERIA LIMITED    </td>
                      <td>IGBOAMALU, CHRISTIAN CHIJIOKE</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>PALLY GLOBAL INVESTMENT LTD     </td>
                      <td>ELDER, DADA OLUMUYIWA AYODELE</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>AFLAD RESOURCES </td>
                      <td>SUNDAY AFOLABI </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>TEE WHY FARMS LIMITED  </td>
                      <td>ADETOLA OBEMBE </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>YSJ LIMITED  </td>
                      <td>JOLUWE OLUWAYEMISI </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MARGOLA WEST AFRICA CONSIDERING LTD   </td>
                      <td>MARGARET WUNMI RAJI </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>WODUDAT CO-OPERATE SOCIETY NIG LTD   </td>
                      <td>HAJIA JUMAI ABUBAKAR</td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>LUSH NATURE NIGERIA LTD    </td>
                      <td>SEDOO OKECHUWU </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>BRIBO MULTISERVICE LTD   </td>
                      <td>OSAHENI ROBART IYAMU </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                    <tr>
                      <td>MENA_SHEA   </td>
                      <td>IKODUDU O. GLORY  </td>
                      <td> <a href="mailto:">Request</a></td>
                      <td>Corporate</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
          
        </div>
      </div>
  </section>
  <!-- //about-6-->
  <!--/w3l-footer-29-main-->
  <?php 
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <!-- disable body scroll which navbar is in active -->
  <?php 
  include('includes/scripts.php');
  ?>
  <!-- Data table plugin-->
    <script type="text/javascript" src="admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#membersList').DataTable();</script>