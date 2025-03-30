@props([
    'footer' => false,
])

<a
    class="grid place-items-center transition duration-300 will-change-transform hover:scale-110 motion-reduce:transition-none motion-reduce:hover:transform-none min-[850px]:col-span-2"
    href="https://sevalla.com/application-hosting/filament-php?ref=filamentphp.com"
    target="_blank"
    title="Sevalla"
>
    <svg
        viewBox="0 0 1700 545"
        @class([
            'fill-current',
            'h-6' => $footer,
            'h-10' => ! $footer,
        ])
    >
        <path
            d="M1611.44 387.762C1600.81 387.762 1591.24 385.869 1582.72 382.084C1574.28 378.225 1567.58 372.547 1562.63 365.049C1557.75 357.55 1555.31 348.305 1555.31 337.312C1555.31 327.849 1557.06 320.023 1560.55 313.835C1564.05 307.647 1568.82 302.697 1574.86 298.984C1580.9 295.271 1587.71 292.469 1595.28 290.576C1602.92 288.61 1610.82 287.191 1618.98 286.317C1628.8 285.298 1636.77 284.388 1642.89 283.587C1649 282.713 1653.45 281.403 1656.21 279.656C1659.05 277.836 1660.47 275.033 1660.47 271.248V270.593C1660.47 262.366 1658.03 255.996 1653.15 251.483C1648.28 246.969 1641.25 244.713 1632.08 244.713C1622.4 244.713 1614.72 246.824 1609.04 251.046C1603.43 255.268 1599.65 260.255 1597.68 266.006L1560.77 260.765C1563.68 250.573 1568.49 242.055 1575.19 235.212C1581.88 228.297 1590.07 223.128 1599.76 219.706C1609.44 216.212 1620.14 214.465 1631.86 214.465C1639.94 214.465 1647.99 215.411 1655.99 217.304C1664 219.197 1671.32 222.327 1677.94 226.695C1684.57 230.99 1689.88 236.85 1693.89 244.276C1697.96 251.701 1700 260.983 1700 272.121V384.377H1662V361.336H1660.69C1658.29 365.995 1654.9 370.363 1650.53 374.44C1646.24 378.444 1640.81 381.683 1634.26 384.158C1627.78 386.561 1620.18 387.762 1611.44 387.762ZM1621.71 358.715C1629.64 358.715 1636.52 357.15 1642.34 354.02C1648.17 350.817 1652.64 346.594 1655.77 341.353C1658.98 336.111 1660.58 330.397 1660.58 324.209V304.444C1659.34 305.463 1657.23 306.409 1654.25 307.283C1651.33 308.157 1648.06 308.921 1644.42 309.576C1640.78 310.231 1637.17 310.814 1633.61 311.323C1630.04 311.833 1626.95 312.27 1624.33 312.634C1618.43 313.435 1613.15 314.745 1608.49 316.565C1603.83 318.385 1600.16 320.933 1597.46 324.209C1594.77 327.412 1593.42 331.561 1593.42 336.657C1593.42 343.937 1596.08 349.433 1601.39 353.146C1606.71 356.859 1613.48 358.715 1621.71 358.715Z"
        />
        <path d="M1522.53 160.739V384.377H1483V160.739H1522.53Z" />
        <path d="M1442.35 160.739V384.377H1402.82V160.739H1442.35Z" />
        <path
            d="M1274.51 387.762C1263.88 387.762 1254.31 385.869 1245.79 382.084C1237.35 378.225 1230.65 372.547 1225.7 365.049C1220.82 357.55 1218.38 348.305 1218.38 337.312C1218.38 327.849 1220.13 320.023 1223.62 313.835C1227.12 307.647 1231.89 302.697 1237.93 298.984C1243.97 295.271 1250.78 292.469 1258.35 290.576C1265.99 288.61 1273.89 287.191 1282.05 286.317C1291.87 285.298 1299.84 284.388 1305.96 283.587C1312.07 282.713 1316.52 281.403 1319.28 279.656C1322.12 277.836 1323.54 275.033 1323.54 271.248V270.593C1323.54 262.366 1321.1 255.996 1316.22 251.483C1311.35 246.969 1304.32 244.713 1295.15 244.713C1285.47 244.713 1277.79 246.824 1272.11 251.046C1266.5 255.268 1262.72 260.255 1260.75 266.006L1223.84 260.765C1226.75 250.573 1231.56 242.055 1238.26 235.212C1244.95 228.297 1253.14 223.128 1262.83 219.706C1272.51 216.212 1283.21 214.465 1294.93 214.465C1303.01 214.465 1311.06 215.411 1319.06 217.304C1327.07 219.197 1334.39 222.327 1341.01 226.695C1347.64 230.99 1352.95 236.85 1356.95 244.276C1361.03 251.701 1363.07 260.983 1363.07 272.121V384.377H1325.07V361.336H1323.76C1321.36 365.995 1317.97 370.363 1313.6 374.44C1309.31 378.444 1303.88 381.683 1297.33 384.158C1290.85 386.561 1283.25 387.762 1274.51 387.762ZM1284.78 358.715C1292.71 358.715 1299.59 357.15 1305.41 354.02C1311.24 350.817 1315.71 346.594 1318.84 341.353C1322.05 336.111 1323.65 330.397 1323.65 324.209V304.444C1322.41 305.463 1320.3 306.409 1317.32 307.283C1314.4 308.157 1311.13 308.921 1307.49 309.576C1303.85 310.231 1300.24 310.814 1296.68 311.323C1293.11 311.833 1290.02 312.27 1287.4 312.634C1281.5 313.435 1276.22 314.745 1271.56 316.565C1266.9 318.385 1263.23 320.933 1260.53 324.209C1257.84 327.412 1256.49 331.561 1256.49 336.657C1256.49 343.937 1259.15 349.433 1264.46 353.146C1269.78 356.859 1276.55 358.715 1284.78 358.715Z"
        />
        <path
            d="M1203.7 216.649L1143.96 384.376H1100.29L1040.55 216.649H1082.7L1121.25 341.243H1123L1161.65 216.649H1203.7Z"
        />
        <path
            d="M950.657 387.653C933.841 387.653 919.318 384.158 907.087 377.17C894.93 370.108 885.575 360.135 879.024 347.249C872.472 334.291 869.196 319.04 869.196 301.496C869.196 284.242 872.472 269.1 879.024 256.069C885.648 242.965 894.894 232.774 906.76 225.494C918.626 218.141 932.567 214.465 948.583 214.465C958.92 214.465 968.675 216.139 977.848 219.488C987.093 222.764 995.247 227.86 1002.31 234.776C1009.44 241.692 1015.05 250.5 1019.12 261.202C1023.2 271.83 1025.24 284.497 1025.24 299.202V311.323H887.759V284.679H987.348C987.275 277.108 985.637 270.374 982.434 264.477C979.231 258.508 974.754 253.812 969.003 250.391C963.324 246.969 956.7 245.259 949.129 245.259C941.048 245.259 933.95 247.224 927.835 251.155C921.72 255.014 916.952 260.11 913.53 266.443C910.181 272.704 908.471 279.583 908.398 287.081V310.341C908.398 320.096 910.181 328.467 913.749 335.456C917.316 342.372 922.302 347.686 928.709 351.399C935.115 355.039 942.613 356.859 951.203 356.859C956.954 356.859 962.16 356.058 966.819 354.457C971.478 352.782 975.518 350.343 978.94 347.14C982.361 343.937 984.946 339.97 986.693 335.238L1023.6 339.387C1021.27 349.142 1016.83 357.66 1010.28 364.94C1003.8 372.147 995.501 377.752 985.382 381.756C975.263 385.687 963.688 387.653 950.657 387.653Z"
        />
        <path
            d="M799.991 222.218C798.972 212.681 794.677 205.256 787.106 199.941C779.608 194.627 769.853 191.97 757.841 191.97C749.396 191.97 742.153 193.244 736.111 195.792C730.068 198.34 725.446 201.798 722.243 206.166C719.039 210.534 717.401 215.52 717.329 221.126C717.329 225.785 718.384 229.825 720.495 233.247C722.679 236.668 725.628 239.58 729.34 241.983C733.053 244.312 737.166 246.278 741.68 247.879C746.193 249.481 750.743 250.828 755.329 251.92L776.295 257.161C784.74 259.127 792.857 261.784 800.647 265.133C808.509 268.481 815.534 272.704 821.722 277.8C827.982 282.895 832.933 289.047 836.573 296.254C840.213 303.461 842.033 311.906 842.033 321.588C842.033 334.692 838.684 346.23 831.986 356.204C825.289 366.104 815.607 373.857 802.94 379.463C790.346 384.995 775.094 387.762 757.186 387.762C739.787 387.762 724.681 385.068 711.869 379.681C699.129 374.294 689.156 366.432 681.949 356.094C674.814 345.757 670.956 333.163 670.374 318.312H710.231C710.813 326.101 713.215 332.58 717.438 337.749C721.66 342.918 727.156 346.776 733.927 349.324C740.77 351.872 748.414 353.146 756.858 353.146C765.667 353.146 773.384 351.836 780.008 349.215C786.706 346.521 791.947 342.809 795.733 338.077C799.518 333.272 801.447 327.667 801.52 321.26C801.447 315.436 799.737 310.632 796.388 306.846C793.039 302.988 788.344 299.785 782.301 297.237C776.332 294.616 769.343 292.286 761.335 290.248L735.892 283.696C717.474 278.964 702.914 271.794 692.213 262.184C681.585 252.502 676.27 239.653 676.27 223.637C676.27 210.461 679.837 198.922 686.972 189.022C694.179 179.121 703.97 171.441 716.346 165.981C728.722 160.448 742.735 157.682 758.387 157.682C774.257 157.682 788.162 160.448 800.101 165.981C812.112 171.441 821.54 179.048 828.383 188.803C835.226 198.485 838.757 209.624 838.975 222.218H799.991Z"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M98.6795 0C45.6293 0 2.62354 43.215 2.62354 96.5233V447.517C2.62354 500.824 45.6293 544.041 98.6795 544.041H465.437C518.489 544.041 561.493 500.824 561.493 447.517V96.5233C561.493 43.215 518.489 0 465.437 0H98.6795ZM337.651 119.923H212.487V187.197H148.45V239.03C148.45 247.023 151.705 254.668 157.459 260.188L212.487 312.97H148.45V377.318H212.487V444.592H337.651V377.318H401.688V325.485C401.688 317.492 398.434 309.846 392.679 304.326L337.651 251.546H401.688V187.197H337.651V119.923ZM337.651 187.197V251.546H241.595C225.519 251.546 212.487 238.45 212.487 222.296V187.197H337.651ZM337.651 377.318H212.487V312.97H308.543C324.619 312.97 337.651 326.065 337.651 342.219V377.318Z"
        />
    </svg>
    <span class="sr-only">Sevalla sponsor logo</span>
</a>
