<?php

namespace App\Service;

use App\Service\EasySVG;


class SvgGenerator {
    const SCARLET = '#d00000';
    const WHITE = '#ffffff';
    const BLACK = '#000000';
    const PANTONE_RED = '#cf0a2c'; #pantone 186cp
    const CMYK_RED = '#da1a32 device-cmyk(0.02, 1.00, 0.85, 0.06)';
    const FOUR_H_GREEN = '#129a63'; #pantone for this is 347U

    const TUNGSTEN = '/Users/abhirijal/Tungsten-Semibold.svg';
    const MERCURY = '/Users/abhirijal/MercuryDisplay-SemIta.svg';

    const HORIZ_N_OUTLINE_R = "M37.27894812 34.48421122h.33157896c.14210526 0 .1894737 0 .26052632.04736842.09473684.04736842.14210526.14210526.14210526.26052632 0 .09473684-.0236842.16578948-.07105263.2368421-.0236842.04736843-.07105263.04736843-.14210526.09473685h-.02368422l.26052633.49736844h-.1894737l-.2368421-.47368422h-.14210527v.47368422h-.18947368v-1.13684212zm.28421054.49736843h.09473684c.09473684-.0236842.14210527-.07105264.14210527-.1894737 0-.07105262-.0236842-.11842105-.09473685-.14210526h-.23684211v.33157895h.09473686zM34.815789 0H20.842105v10.65789H23.210526v5.87369L13.073684.54474 12.742105 0H0v10.65789H2.368421v14.68422H0V36H15.157895V25.34211H12.789474v-5.87369l10.136842 15.98684.355263.54474H36V25.34211H33.631579V10.65789H36V0h-1.184211zm.710527 1.18421v9h-2.368421v15.63158h2.368421v9.71053H23.542105l-.213158-.33158-11.013158-17.36053v7.98158h2.368422v9.71053H.473684v-9.71053h2.368421V10.18421H.473684V.47368h11.984211l.213158.33158 11.013158 17.36053v-7.98158h-2.368422V.47368h14.210527v.71053z";
    const HORIZ_N_R_CIRCLE = "M37.681579 34.10526c-.544737 0-.971053.42632-.971053.94737S37.136842 36 37.657895 36c.521052 0 .947368-.42632.947368-.94737s-.426316-.94737-.923684-.94737zm-.02368 1.70527c-.426316 0-.757895-.33158-.757895-.7579 0-.42631.331579-.75789.757895-.75789.402631 0 .757894.35526.757894.75789 0 .42632-.331578.7579-.757894.7579z";
    const HORIZ_N_FILL = "M24.394737 20.60526L12.078947 1.18421H1.184211v8.28947h2.368421v17.05264H1.184211v8.28947h12.789473v-8.28947h-2.368421V15.39474l12.31579 19.42105h10.894736v-8.28947h-2.368421V9.47368h2.368421V1.18421H22.026316v8.28947h2.368421v11.13158z";
    const HORIZ_N_SERIF = "M37.657895 35.81053c-.426316 0-.757895-.33158-.757895-.7579 0-.42631.331579-.75789.757895-.75789.402631 0 .757894.35526.757894.75789 0 .42632-.331578.7579-.757894.7579z";
    const HORIZ_N_R_FILL = "M34.815789.47368h-13.5v9.71053h2.368422v7.98158L12.671053.80526l-.189474-.33158H.473684v9.71053h2.368421v15.63158H.473684v9.71053h14.210527v-9.71053h-2.368422v-7.98158l11.013158 17.36053.213158.33158h11.984211v-9.71053h-2.368421V10.18421h2.368421V.47368h-.710527zM13.973684 26.52632v8.28947H1.184211v-8.28947h2.368421V9.47368H1.184211V1.18421h10.894736l12.31579 19.42105V9.47368h-2.368421V1.18421h12.789473v8.28947h-2.368421v17.05264h2.368421v8.28947H23.921053l-12.31579-19.42105v11.13158h2.368421z";

    const VERT_N_OUTLINE_R = "M119.27942132 34.48421092h.33157896c.14210526 0 .1894737 0 .26052632.04736842.09473684.04736842.14210526.14210526.14210526.26052632 0 .09473684-.0236842.16578948-.07105263.2368421-.0236842.04736843-.07105263.04736843-.14210526.09473685h-.02368422l.26052633.49736844h-.1894737l-.2368421-.47368422h-.14210527v.47368422h-.18947368v-1.13684212zm.28421054.49736843h.09473684c.09473684-.0236842.14210527-.07105264.14210527-.1894737 0-.07105262-.02368422-.11842105-.09473685-.14210526h-.23684211v.33157895h.09473686zM116.81579 0h-13.97368V10.65789h2.36842v5.87369L95.073684.5447397 94.742105 0H82V10.65789h2.368421v14.68422H82V36h15.157896V25.34211H94.789475v-5.87369l10.136845 15.98684.35526.54474H118V25.34211h-2.36842V10.65789H118V 0h-1.18421zm.71053 1.18421V10.18421h-2.36842v15.63158h2.36842v9.71053H105.54211l-.21316-.33158-11.013161-17.36053v7.98158h2.368422v9.71053H82.473684v-9.71053h2.368421V10.18421h-2.368421V.4736797h11.984211l.213158.33158L105.68421 18.16579v-7.98158h-2.36842V.4736797h14.21053v.71053z";
    const VERT_N_R_CIRCLE = "M119.68205 34.10526c-.54474 0-.97105.42632-.97105.94737s.42631.94737.94737.94737c.52105 0 .94736-.42632.94736-.94737s-.42631-.94737-.92368-.94737zm-.0237 1.70527c-.42632 0-.7579-.33158-.7579-.7579 0-.42631.33158-.75789.7579-.75789.40263 0 .75789.35526.75789.75789 0 .42632-.33157.7579-.75789.7579z";
    const VERT_N_FILL = "M106.39474 20.60526L94.078946 1.1842097H83.18421V9.47368h2.368421v17.05264H83.18421v8.28947h12.789473v-8.28947h-2.368421V15.39474l12.315788 19.42105h10.89474v-8.28947h-2.36842V9.47368h2.36842V1.1842097h-12.78947V9.47368h2.36842v11.13158z";
    const VERT_N_SERIF = "M119.65837 35.81053c-.42632 0-.7579-.33158-.7579-.7579 0-.42631.33158-.75789.7579-.75789.40263 0 .75789.35526.75789.75789 0 .42632-.33158.7579-.75789.7579z";
    const VERT_N_R_FILL = "M116.81579.4736797h-13.5V10.18421h2.36842v7.98158L94.67105.8052597l-.189474-.33158H82.473681V10.18421h2.368421v15.63158h-2.368421v9.71053h14.210527v-9.71053h-2.368422v-7.98158l11.013164 17.36053.21316.33158H117.52632v-9.71053h-2.36842V10.18421h2.36842V.4736797h-.71053zM95.973681 26.52632v8.28947H83.184208v-8.28947h2.368421V9.47368h-2.368421V1.1842097h10.894736L106.39474 20.60526V9.47368h-2.36843V1.1842097h12.78948V9.47368h-2.36842v17.05264h2.36842v8.28947h-10.89474L93.60526 15.39474v11.13158h2.368421z";
    const VERT_BACKGROUND = "M-100 -100 L300 -100 L300 100 L-100 100 Z";

    const LEFT_N_R_FILL = "M42.79 36.46         a .76 .76 0 1 0 1.52 0         .76 .76 0 1 0 -1.52 0";
    const LEFT_N_R_CIRCLE = "M42.79 36.46       a .76 .76 0 1 0 1.52 0         .76 .76 0 1 0 -1.52 0     m -.19 0     a .95 .95 0 1 0 1.9 0     .95 .95 0 1 0 -1.9 0";
    const LEFT_N_OUTLINE_R = "M43.46 36.39h.09a.17 .17,0,0,0,.14 -.18 .13 .13,0,0,0 -.09 -.14h -.24v.34Zm-.29 -.5h.33a.54 .54,0,0,1,.25,0,.29 .29,0,0,1,.15 .27 .34 .34,0,0,1 -.08 .23 .37 .37,0,0,1 -.13 .09h0l .26 .51h -.19l -.25 -.48h -.13V37h -.19Z";
    const LEFT_N_OUTLINE = "M41.42,2.6v9H39V27.23h2.37v9.71h-12l-.21-.33-11-17.35v8h2.37v9.71H6.37V27.23H8.73V11.6H6.37V1.89h12l.21.33,11,17.35v-8H27.21V1.89H41.42Zm-.71-1.18h-14V12.07H29.1v5.87L19,2l-.35-.55H5.89V12.07H8.26V26.75H5.89V37.41H21V26.75H18.68V20.89l10.13,16,.35.55H41.89V26.75H39.52V12.07h2.37V1.41Z";
    const LEFT_N_SERIF = "M19.87,27.94h0v8.29H7.08V27.94H9.44V10.89H7.08V2.6H18L30.29,22V10.89H27.92V2.6H40.71v8.29H38.34V27.94h2.37v8.29H29.81L17.5,16.81V27.94ZM40.71,1.89H27.21V11.6h2.37v8l-11-17.36-.21-.33h-12V11.6H8.73V27.23H6.37v9.71H20.58V27.23H18.21v-8l11,17.35.21.33h12V27.23H39V11.6h2.37V1.89Z";
    const LEFT_N_FILL = "M24.75,22.12L24.75 22.12 12.43 2.7 1.54 2.7 1.54 10.99 3.91 10.99 3.91 28.04 1.54 28.04 1.54 36.33 14.33 36.33 14.33 28.04 11.96 28.04 11.96 16.91 24.28 36.33 35.17 36.33 35.17 28.04 32.8 28.04 32.8 10.99 35.17 10.99 35.17 2.7 22.38 2.7 22.38 10.99 24.75 10.99 24.75 22.12z";

    const RIGHT_CLOVER_FILL = "M 0,0 C 0.043,-1.596 -0.626,-2.857 -1.375,-3.591 -1.853,-4.06 -2.473,-4.264 -2.961,-4.647 -3.408,-4.998 -3.925,-5.511 -4.23,-6.073 -4.515,-6.598 -4.55,-7.139 -4.759,-7.552 -5.232,-8.487 -6.088,-9.297 -7.138,-9.77 c -2.089,-0.941 -4.443,0.226 -5.552,1.214 -0.81,0.723 -1.752,1.868 -2.221,3.011 -0.528,1.286 -0.877,3.177 -1.163,4.858 -0.067,0.392 -0.169,1.387 -0.529,1.426 -0.983,0.108 -0.542,-3.036 -0.476,-3.855 0.361,-4.453 1.786,-7.509 3.701,-10.087 l -3.331,0 c -1.722,2.837 -2.364,7.326 -2.009,12.2 0.046,0.631 0.162,1.617 -0.159,1.742 -0.65,0.255 -0.712,-0.845 -0.793,-1.267 -0.297,-1.566 -0.58,-3.64 -1.11,-4.964 -0.799,-1.998 -3.091,-4.355 -5.552,-4.595 -2.255,-0.22 -3.885,1.121 -4.6,2.482 -0.226,0.429 -0.306,0.975 -0.582,1.479 -0.297,0.542 -0.738,1.074 -1.163,1.426 -0.416,0.343 -0.92,0.491 -1.322,0.792 -0.846,0.631 -2.202,2.448 -1.692,4.383 0.235,0.892 1.119,2.31 1.745,2.905 0.889,0.846 2.278,1.807 3.754,2.112 1.61,0.333 4.377,0.159 6.345,0.159 0.62,0 1.616,-0.154 1.692,0.37 0.091,0.63 -1.038,0.65 -1.692,0.686 -1.976,0.109 -4.881,0.089 -6.504,0.634 -2.352,0.79 -4.811,3.171 -4.811,5.968 0,1.353 0.568,2.431 1.322,3.168 0.776,0.761 1.72,1.021 2.485,1.532 1.433,0.957 1.626,2.374 2.644,3.433 0.692,0.719 1.947,1.441 3.225,1.479 1.798,0.052 3.119,-0.757 4.071,-1.532 0.627,-0.51 1.209,-1.28 1.692,-2.007 1.239,-1.866 1.069,-4.991 1.269,-7.922 0.042,-0.61 0.159,-1.214 0.582,-1.214 0.629,0 0.62,1.637 0.634,1.901 0.126,2.351 0.224,5.139 0.899,6.601 0.964,2.085 3.215,4.143 5.817,4.173 1.671,0.018 2.982,-0.766 3.807,-1.849 0.744,-0.977 1.171,-2.393 2.432,-3.169 0.851,-0.523 1.823,-0.836 2.485,-1.531 1.507,-1.584 1.5,-4.436 0.106,-6.285 -1.041,-1.381 -2.84,-2.712 -5.076,-3.01 -1.321,-0.176 -3.923,-0.343 -5.605,-0.423 -0.675,-0.032 -1.457,-0.03 -1.428,-0.581 0.032,-0.594 1.062,-0.422 1.692,-0.422 3.1,0 6.263,0.202 8.249,-0.792 C -1.874,3.865 -0.431,2.073 0,0";
    const RIGHT_CLOVER_LETTER_1 = "M 0,0 -0.128,-0.168 -0.761,0.316 C -0.751,0.211 -0.764,0.106 -0.8,0.002 l -0.152,0.117 c 0.019,0.054 0.028,0.123 0.028,0.204 -0.001,0.082 -0.021,0.153 -0.059,0.213 L -0.879,0.671 0,0 Z";
    const RIGHT_CLOVER_LETTER_2 = "m 0,0 c -0.052,-0.029 -0.101,-0.042 -0.148,-0.037 -0.047,0.005 -0.09,0.022 -0.128,0.051 -0.065,0.05 -0.102,0.114 -0.109,0.192 -0.008,0.078 0.02,0.159 0.084,0.243 0.064,0.083 0.135,0.132 0.213,0.145 C -0.011,0.607 0.061,0.589 0.126,0.539 0.167,0.508 0.195,0.47 0.21,0.425 0.226,0.38 0.227,0.332 0.215,0.281 0.271,0.314 0.328,0.329 0.385,0.326 0.442,0.322 0.495,0.302 0.544,0.265 0.625,0.203 0.671,0.127 0.682,0.037 0.693,-0.054 0.666,-0.141 0.601,-0.227 0.54,-0.306 0.468,-0.357 0.386,-0.377 0.289,-0.402 0.197,-0.381 0.111,-0.316 0.064,-0.279 0.029,-0.234 0.007,-0.181 -0.015,-0.127 -0.017,-0.067 0,0 m -0.142,0.163 c 0.033,-0.025 0.066,-0.036 0.1,-0.031 0.033,0.004 0.062,0.022 0.086,0.054 0.024,0.032 0.034,0.065 0.03,0.098 C 0.07,0.318 0.051,0.347 0.017,0.373 -0.014,0.397 -0.047,0.407 -0.08,0.402 -0.114,0.398 -0.142,0.38 -0.166,0.349 -0.191,0.317 -0.201,0.284 -0.196,0.25 -0.192,0.216 -0.174,0.187 -0.142,0.163 m 0.363,-0.301 c 0.046,-0.036 0.091,-0.052 0.135,-0.048 0.045,0.004 0.08,0.024 0.107,0.059 0.027,0.035 0.036,0.073 0.029,0.115 C 0.484,0.03 0.457,0.069 0.41,0.105 0.368,0.136 0.326,0.15 0.284,0.146 0.241,0.142 0.206,0.122 0.179,0.087 0.147,0.046 0.138,0.004 0.151,-0.038 c 0.013,-0.041 0.036,-0.075 0.07,-0.1";
    const RIGHT_CLOVER_LETTER_3 = "m 0,0 0.135,0.176 0.474,-0.361 c 0.075,-0.058 0.125,-0.093 0.151,-0.105 0.042,-0.02 0.084,-0.024 0.128,-0.012 0.043,0.012 0.084,0.042 0.121,0.091 0.039,0.05 0.057,0.096 0.056,0.137 C 1.064,-0.033 1.051,0.002 1.025,0.03 0.999,0.058 0.952,0.098 0.882,0.151 L 0.399,0.52 0.534,0.697 0.993,0.346 C 1.098,0.266 1.169,0.204 1.205,0.161 1.241,0.119 1.264,0.073 1.274,0.025 1.285,-0.024 1.282,-0.076 1.267,-0.133 1.252,-0.189 1.218,-0.252 1.165,-0.321 1.101,-0.404 1.043,-0.46 0.991,-0.489 0.938,-0.517 0.887,-0.532 0.837,-0.533 0.787,-0.535 0.742,-0.527 0.702,-0.509 0.643,-0.482 0.565,-0.431 0.467,-0.356 L 0,0 Z";
    const RIGHT_CLOVER_LETTER_4 = "M 0,0 0.115,0.184 C 0.181,0.151 0.239,0.139 0.291,0.151 0.342,0.161 0.388,0.194 0.43,0.248 0.473,0.305 0.494,0.357 0.492,0.404 0.49,0.452 0.473,0.488 0.441,0.512 0.42,0.528 0.398,0.535 0.374,0.535 0.35,0.533 0.321,0.522 0.288,0.5 0.265,0.485 0.216,0.447 0.141,0.388 0.045,0.311 -0.035,0.266 -0.098,0.254 c -0.09,-0.017 -0.169,0.001 -0.238,0.054 -0.045,0.034 -0.077,0.079 -0.096,0.134 -0.02,0.055 -0.021,0.114 -0.005,0.177 0.016,0.063 0.049,0.128 0.101,0.195 0.084,0.11 0.171,0.174 0.262,0.193 C 0.017,1.025 0.104,1.005 0.187,0.946 L 0.058,0.764 C 0.007,0.791 -0.038,0.8 -0.076,0.79 -0.115,0.78 -0.154,0.751 -0.192,0.701 -0.231,0.649 -0.251,0.601 -0.252,0.556 -0.253,0.527 -0.242,0.503 -0.22,0.486 -0.199,0.47 -0.174,0.465 -0.146,0.472 -0.11,0.48 -0.049,0.519 0.037,0.589 0.123,0.66 0.193,0.707 0.246,0.732 0.299,0.757 0.354,0.766 0.409,0.761 0.465,0.755 0.52,0.732 0.576,0.689 0.626,0.651 0.662,0.601 0.685,0.54 0.707,0.478 0.709,0.414 0.692,0.347 0.674,0.28 0.636,0.208 0.578,0.132 0.493,0.021 0.402,-0.045 0.305,-0.065 0.209,-0.085 0.107,-0.063 0,0";
    const RIGHT_CLOVER_LETTER_5 = "m 0,0 0.185,0.13 c 0.076,-0.1 0.114,-0.198 0.114,-0.295 0,-0.096 -0.036,-0.191 -0.108,-0.285 -0.089,-0.116 -0.201,-0.181 -0.338,-0.195 -0.136,-0.015 -0.274,0.031 -0.411,0.136 -0.146,0.111 -0.23,0.235 -0.253,0.372 -0.023,0.136 0.012,0.266 0.106,0.388 0.082,0.107 0.18,0.17 0.294,0.188 0.068,0.011 0.145,0 0.23,-0.034 L -0.273,0.199 C -0.326,0.223 -0.378,0.229 -0.43,0.216 -0.481,0.203 -0.525,0.174 -0.561,0.127 -0.61,0.062 -0.627,-0.008 -0.612,-0.084 c 0.016,-0.076 0.076,-0.153 0.18,-0.233 0.11,-0.084 0.204,-0.124 0.281,-0.12 0.078,0.003 0.141,0.037 0.19,0.101 0.035,0.047 0.051,0.098 0.047,0.155 C 0.082,-0.124 0.053,-0.064 0,0";
    const RIGHT_CLOVER_LETTER_6 = "M 0,0 -0.156,0.119 0.283,0.692 0.404,0.599 C 0.415,0.516 0.445,0.417 0.495,0.301 0.544,0.186 0.608,0.078 0.687,-0.023 0.765,-0.124 0.844,-0.203 0.921,-0.262 L 0.797,-0.424 C 0.678,-0.329 0.574,-0.209 0.484,-0.066 0.395,0.077 0.33,0.226 0.292,0.381 L 0,0 Z";
    const RIGHT_CLOVER_LETTER_7 = "M 0,0 C 0.065,0.084 0.146,0.127 0.243,0.129 0.358,0.131 0.498,0.068 0.664,-0.058 0.83,-0.185 0.927,-0.304 0.955,-0.417 0.979,-0.509 0.958,-0.598 0.894,-0.683 0.829,-0.767 0.744,-0.811 0.638,-0.813 0.533,-0.815 0.396,-0.752 0.228,-0.623 0.064,-0.498 -0.033,-0.378 -0.062,-0.266 -0.085,-0.173 -0.065,-0.085 0,0 M 0.139,-0.106 C 0.123,-0.126 0.116,-0.149 0.117,-0.175 0.118,-0.2 0.132,-0.23 0.159,-0.265 0.193,-0.309 0.262,-0.371 0.365,-0.449 0.467,-0.528 0.542,-0.577 0.588,-0.596 0.635,-0.615 0.67,-0.621 0.695,-0.615 c 0.025,0.005 0.045,0.018 0.06,0.038 0.015,0.02 0.023,0.043 0.022,0.069 -0.001,0.026 -0.015,0.056 -0.042,0.09 C 0.701,-0.374 0.632,-0.312 0.53,-0.234 0.427,-0.155 0.352,-0.106 0.306,-0.087 0.26,-0.068 0.224,-0.062 0.199,-0.067 0.174,-0.073 0.154,-0.086 0.139,-0.106";
    const RIGHT_CLOVER_LETTER_8 = "M 0,0 -0.156,0.119 0.283,0.692 0.404,0.599 C 0.415,0.516 0.445,0.417 0.495,0.302 0.544,0.186 0.608,0.078 0.687,-0.023 c 0.078,-0.1 0.157,-0.18 0.234,-0.239 L 0.797,-0.424 C 0.678,-0.329 0.574,-0.209 0.484,-0.066 0.395,0.077 0.331,0.226 0.292,0.381 L 0,0 Z";
    const RIGHT_CLOVER_H_1 = "M63.09,15.01L58.08 10.15 59.06 9.14 61.03 11.05 62.96 9.07 60.99 7.16 61.97 6.16 66.97 11.02 65.99 12.02 63.8 9.89 61.88 11.87 64.07 14 63.09 15.01z";
    const RIGHT_CLOVER_H_2 = "M74.49,10.89L79.55 6.08 80.52 7.1 78.52 8.99 80.43 10.99 82.42 9.1 83.39 10.12 78.33 14.93 77.36 13.91 79.58 11.8 77.67 9.8 75.45 11.9 74.49 10.89z";
    const RIGHT_CLOVER_H_3 = "M79.17,21.77L84.6 26.16 83.72 27.25 81.58 25.52 79.84 27.67 81.98 29.4 81.1 30.49 75.67 26.11 76.55 25.02 78.93 26.93 80.67 24.79 78.29 22.87 79.17 21.77z";
    const RIGHT_CLOVER_H_4 = "M65.96,25.93L60.65 30.45 59.74 29.38 61.83 27.6 60.04 25.5 57.94 27.27 57.03 26.2 62.35 21.68 63.26 22.75 60.93 24.73 62.73 26.84 65.05 24.86 65.96 25.93";

    const CENTER_DIVIDER = "M51,0 L51,39 Z";

	const RECOGNIZED_STUDENT_ORGANIZATION = 'Recognized Student Organization';

    public function getLockupFields($object, $name) : string
    {
        foreach ($object as $item) {
            if (($item->getFields()->getSlug()) == $name) {
                if ($item->getFields()->getUppercase() == 1) {
                    return strtoupper($item->getValue());
                }
                return $item->getValue();
            }
        }
        return "";
    }

    public function createLockup($template, $lockup, $orient = 'h', $style = 'RGB', $rev = false, $preview = false) : string
    {
        $svg = new EasySVG();
        $main_text_color = self::SCARLET;
        $secondary_text_color = self::BLACK;
        $n_main_color = self::SCARLET;
        $n_secondary_color = self::WHITE;
        $clover_color = self::FOUR_H_GREEN;
        $clover_h_color = NULL;

        switch ($style) {
            case 'RGB':
                if ($template == 'v_social') {
                    $main_text_color = self::WHITE;
                    $secondary_text_color = self::WHITE;
                    $n_main_color = self::WHITE;
                    $n_secondary_color = self::SCARLET;
                    break;
                }
                if (!$rev) {
                    $main_text_color = self::SCARLET;
                    $secondary_text_color = self::BLACK;
                    $n_main_color = self::SCARLET;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                } else {
                    $main_text_color = self::WHITE;
                    $secondary_text_color = self::WHITE;
                    $n_main_color = self::SCARLET;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::WHITE;
                }
                break;
            case 'pms186cp':
                if (!$rev) {
                    $main_text_color = self::PANTONE_RED;
                    $secondary_text_color = self::PANTONE_RED;
                    $n_main_color = self::PANTONE_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                } else {
                    $main_text_color = self::WHITE;
                    $secondary_text_color = self::WHITE;
                    $n_main_color = self::PANTONE_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::WHITE;
                    $clover_h_color = self::BLACK;
                }
                break;
            case '4c':
                if (!$rev) {
                    $main_text_color = self::CMYK_RED;
                    $secondary_text_color = self::BLACK;
                    $n_main_color = self::CMYK_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::FOUR_H_GREEN;
                } else {
                    $main_text_color = self::WHITE;
                    $secondary_text_color = self::WHITE;
                    $n_main_color = self::CMYK_RED;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::WHITE;
                    $clover_h_color = self::BLACK;
                }
                break;
            case 'blk':
                if (!$rev) {
                    $main_text_color = self::BLACK;
                    $secondary_text_color = self::BLACK;
                    $n_main_color = self::BLACK;
                    $n_secondary_color = self::WHITE;
                    $clover_color = self::BLACK;
                } else {
                    $main_text_color = self::WHITE;
                    $secondary_text_color = self::WHITE;
                    $n_main_color = self::WHITE;
                    $n_secondary_color = self::BLACK;
                    $clover_color = self::WHITE;
                }
                break;
            default:
                break;
        }

        if (!isset($clover_h_color)) {
            $clover_h_color = $n_secondary_color;
        }

        if ($preview) {
            $svg->addAttribute("class", "preview");
        }

        $height = 200;
        $width = 80;
        $x = 0;
        $y = 0;

        if ($orient == 'h') {
            switch ($template) {
                case 'h_org':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 44, 7.75);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . ($text_width + 44) . " 36");
                    $height = 36;
                    $width = $text_width + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 36);
                        $svg->addAttribute('width', $text_width + 44);
                    }
                    break;
                case 'h_org_2':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 44, 2.25);
                    $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];

                    $svg->addText($this->getLockupFields($lockup, "org_second_line"), 44, 13.25);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_second_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 36");
                    $height = 36;
                    $width = max($main_text_width, $secondary_text_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 36);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
                    }
                    break;
                case 'h_org_subject':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 44, 7.75);
                    $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 44, 26);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 38");
                    $height = 38;
                    $width = max($main_text_width, $secondary_text_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 38);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
                    }
                    break;
                case 'h_student_org':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "student_org_first_line"), 44, 7.75);
                    $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "student_org_first_line"))[0];

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText(self::RECOGNIZED_STUDENT_ORGANIZATION, 44, 26);
                    $secondary_text_width = $svg->textDimensions(self::RECOGNIZED_STUDENT_ORGANIZATION)[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 38");
                    $height = 38;
                    $width = max($main_text_width, $secondary_text_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 38);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
                    }
                    break;
                case 'h_org_subject_2':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 44, -5.8);
                    $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 44, 17);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];

                    $svg->addText($this->getLockupFields($lockup, "subject_second_line"), 44, 26);
                    $third_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_second_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width, $third_width) + 44) . " 38");
                    $height = 38;
                    $width = max($main_text_width, $secondary_text_width, $third_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 38);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width, $third_width) + 44);
                    }
                    break;
                case 'h_org_2_subject':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 44, -5.8);
                    $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];

                    $svg->addText($this->getLockupFields($lockup, "org_second_line"), 44, 5.2);
                    $third_width = $svg->textDimensions($this->getLockupFields($lockup, "org_second_line"))[0];

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 44, 26);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width, $third_width) + 44) . " 38");
                    $height = 38;
                    $width = max($main_text_width, $secondary_text_width, $third_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 38);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width, $third_width) + 44);
                    }
                    break;
                case 'h_org_2_subject_2':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 44, -5.8);
                    $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];

                    $svg->addText($this->getLockupFields($lockup, "org_second_line"), 44, 4.2);
                    $third_width = $svg->textDimensions($this->getLockupFields($lockup, "org_second_line"))[0];

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(7);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 44, 19);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];

                    $svg->addText($this->getLockupFields($lockup, "subject_second_line"), 44, 27);
                    $fourth_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_second_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width, $third_width, $fourth_width) + 44) . " 38");
                    $height = 38;
                    $width = max($main_text_width, $secondary_text_width, $third_width, $fourth_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 38);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width, $third_width, $fourth_width) + 44);
                    }
                    break;
	            case 'h_student_org_2':
		            $svg->setFontSVG(self::TUNGSTEN);
		            $svg->setLetterSpacing(0.05);
		            $svg->setFontSize(12);
		            $svg->setFontColor($main_text_color);
		            $svg->addText($this->getLockupFields($lockup, "student_org_first_line"), 44, -5.8);
		            $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "student_org_first_line"))[0];

		            $svg->addText($this->getLockupFields($lockup, "student_org_second_line"), 44, 5.2);
		            $third_width = $svg->textDimensions($this->getLockupFields($lockup, "student_org_second_line"))[0];

		            $svg->setFontSVG(self::MERCURY);
		            $svg->setLetterSpacing(0);
		            $svg->setFontSize(8.125);
		            $svg->setFontColor($secondary_text_color);
		            $svg->addText(self::RECOGNIZED_STUDENT_ORGANIZATION, 44, 26);
		            $secondary_text_width = $svg->textDimensions(self::RECOGNIZED_STUDENT_ORGANIZATION)[0];

		            $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width, $third_width) + 44) . " 38");
		            $height = 38;
		            $width = max($main_text_width, $secondary_text_width, $third_width) + 44;
		            if (!$preview) {
			            $svg->addAttribute('height', 38);
			            $svg->addAttribute('width', max($main_text_width, $secondary_text_width, $third_width) + 44);
		            }
		            break;
                case 'h_acronym':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "acronym_first_line"), 44, -0.5);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_first_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . ($text_width + 44) . " 36");
                    $height = 38;
                    $width = $text_width + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 36);
                        $svg->addAttribute('width', $text_width + 44);
                    }
                    break;
                case 'h_acronym_subject':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $svg->addText($this->getLockupFields($lockup, "acronym_first_line"), 44, -10.5);
                    $main_text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_first_line"))[0];

                    $svg->setFontSize(16.25);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText($this->getLockupFields($lockup, "acronym_subject"), 44, 16.25);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_subject"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 40");
                    $height = 40;
                    $width = max($main_text_width, $secondary_text_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 40);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
                    }
                    break;
                case 'h_extension':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $svg->addText('EXTENSION', 44, -0.5);
                    $main_text_width = $svg->textDimensions('EXTENSION')[0];

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText($this->getLockupFields($lockup, "extension"), 44, 26);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "extension"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 38");
                    $height = 38;
                    $width = max($main_text_width, $secondary_text_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 38);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
                    }
                    break;
                case 'h_ncta':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $svg->addText('NCTA', 44, -0.5);
                    $main_text_width = $svg->textDimensions('NCTA')[0];

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 44, 26);
                    $secondary_text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];

                    $svg->addAttribute('viewBox', "0 0 " . (max($main_text_width, $secondary_text_width) + 44) . " 38");
                    $height = 38;
                    $width = max($main_text_width, $secondary_text_width) + 44;
                    if (!$preview) {
                        $svg->addAttribute('height', 38);
                        $svg->addAttribute('width', max($main_text_width, $secondary_text_width) + 44);
                    }
                    break;
            }

            $svg->addPath(self::HORIZ_N_R_CIRCLE, array('fill' => $n_main_color));
            if (!($style == 'blk' && $rev)) {
                $svg->addPath(self::HORIZ_N_R_FILL, array('fill' => $n_secondary_color));
                $svg->addPath(self::HORIZ_N_SERIF, array('fill' => $n_secondary_color));
            }
            $svg->addPath(self::HORIZ_N_FILL, array('fill' => $n_main_color));
            $svg->addPath(self::HORIZ_N_OUTLINE_R, array('fill' => $n_main_color));
        } else if ($orient == 'v') {
            switch ($template) {
                case 'v_org':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 100 - ($text_width / 2), 37);
                    break;
                case 'v_org_2':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 100 - ($text_width / 2), 37);

                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_second_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_second_line"), 100 - ($text_width / 2), 48);
                    break;
                case 'v_org_subject':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 100 - ($text_width / 2), 37);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 100 - ($text_width / 2), 55);
                    break;
                case 'v_student_org':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "student_org_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "student_org_first_line"), 100 - ($text_width / 2), 37);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions(self::RECOGNIZED_STUDENT_ORGANIZATION)[0];
                    $svg->addText(self::RECOGNIZED_STUDENT_ORGANIZATION, 100 - ($text_width / 2), 55);
                    break;
                case 'v_org_subject_2':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 100 - ($text_width / 2), 37);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 100 - ($text_width / 2), 55);

                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_second_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "subject_second_line"), 100 - ($text_width / 2), 64);
                    break;
                case 'v_org_2_subject':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 100 - ($text_width / 2), 37);

                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_second_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_second_line"), 100 - ($text_width / 2), 48);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 100 - ($text_width / 2), 66);
                    break;
                case 'v_org_2_subject_2':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(12);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_first_line"), 100 - ($text_width / 2), 37);

                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "org_second_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "org_second_line"), 100 - ($text_width / 2), 48);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 100 - ($text_width / 2), 61);

                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_second_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "subject_second_line"), 100 - ($text_width / 2), 70);
                    break;
	            case 'v_student_org_2':
		            $svg->setFontSVG(self::TUNGSTEN);
		            $svg->setLetterSpacing(0.05);
		            $svg->setFontSize(12);
		            $svg->setFontColor($main_text_color);
		            $text_width = $svg->textDimensions($this->getLockupFields($lockup, "student_org_first_line"))[0];
		            $svg->addText($this->getLockupFields($lockup, "student_org_first_line"), 100 - ($text_width / 2), 37);

		            $text_width = $svg->textDimensions($this->getLockupFields($lockup, "student_org_second_line"))[0];
		            $svg->addText($this->getLockupFields($lockup, "student_org_second_line"), 100 - ($text_width / 2), 48);

		            $svg->setFontSVG(self::MERCURY);
		            $svg->setLetterSpacing(0);
		            $svg->setFontSize(8.125);
		            $svg->setFontColor($secondary_text_color);
		            $text_width = $svg->textDimensions(self::RECOGNIZED_STUDENT_ORGANIZATION)[0];
		            $svg->addText(self::RECOGNIZED_STUDENT_ORGANIZATION, 100 - ($text_width / 2), 66);
		            break;
                case 'v_acronym':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "acronym_first_line"), 100 - ($text_width / 2), 32);
                    break;
                case 'v_social':
                    $svg->addPath(self::VERT_BACKGROUND, array('fill' => $n_secondary_color));

                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "acronym_first_line"), 100 - ($text_width / 2), 32);
                    break;
                case 'v_acronym_subject':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "acronym_first_line"), 100 - ($text_width / 2), 32);

                    $svg->setFontSize(16.25);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_subject"))[0];
                    $svg->addText($this->getLockupFields($lockup, "acronym_subject"), 100 - ($text_width / 2), 56.25);
                    break;
                case 'v_acronym_2_subject':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "acronym_first_line"), 100 - ($text_width / 2), 32);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_second_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "acronym_second_line"), 100 - ($text_width / 2), 52);

                    $svg->setFontSize(16.25);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "acronym_subject"))[0];
                    $svg->addText($this->getLockupFields($lockup, "acronym_subject"), 100 - ($text_width / 2), 80);
                    break;
                case 'v_extension':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions('EXTENSION')[0];
                    $svg->addText('EXTENSION', 100 - ($text_width / 2), 32);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "extension"))[0];
                    $svg->addText($this->getLockupFields($lockup, "extension"), 100 - ($text_width / 2), 60);
                    break;
                case 'v_ncta':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(22);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions('NCTA')[0];
                    $svg->addText('NCTA', 100 - ($text_width / 2), 32);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "subject_first_line"))[0];
                    $svg->addText($this->getLockupFields($lockup, "subject_first_line"), 100 - ($text_width / 2), 60);
                    break;
                case 'v_extension_4h':
                    $svg->setFontSVG(self::TUNGSTEN);
                    $svg->setLetterSpacing(0.05);
                    $svg->setFontSize(28);
                    $svg->setFontColor($main_text_color);
                    $text_width = $svg->textDimensions('EXTENSION')[0];
                    $svg->addText('EXTENSION', 100 - ($text_width / 2), 32);

                    $svg->setFontSVG(self::MERCURY);
                    $svg->setLetterSpacing(0);
                    $svg->setFontSize(8.125);
                    $svg->setFontColor($secondary_text_color);
                    $text_width = $svg->textDimensions($this->getLockupFields($lockup, "extension"))[0];
                    $svg->addText($this->getLockupFields($lockup, "extension"), 100 - ($text_width / 2), 66);
                    break;
            }

            $height = 80;
            $width = 200;
            $x = 0;
            $y = 0;
            switch ($template) {
                case 'v_org_2_subject_2':
                    $height = 88;
                    break;
                case 'v_acronym_2_subject':
                    $height = 104;
                    break;
                case 'v_social':
                    $height = 100;
                    $width = 100;
                    $y = -20;
                    $x = 50;
                    break;
            }

            $svg->addAttribute('viewBox', $x . " " .  $y . " " . ($width) . " " . ($height));
            $height = $height;
            $width = $width;
            if (!$preview) {
                $svg->addAttribute('height', $height);
                $svg->addAttribute('width', $width);
            }

            if ($template == 'v_extension_4h') {
                $svg->addPath(self::LEFT_N_R_CIRCLE, array('fill' => $n_main_color, 'transform' => 'translate(50.5 0.1)'));
                if (!($style == 'blk' && $rev)) {
                    $svg->addPath(self::LEFT_N_R_FILL, array('fill' => $n_secondary_color, 'transform' => 'translate(50.5 0.1)'));
                    $svg->addPath(self::LEFT_N_SERIF, array('fill' => $n_secondary_color, 'transform' => 'translate(50.5 0.1)'));
                }
                $svg->addPath(self::LEFT_N_OUTLINE, array('fill' => $n_main_color, 'transform' => 'translate(50.5 0.1)'));
                $svg->addPath(self::LEFT_N_FILL, array('fill' => $n_main_color, 'transform' => 'translate(56, 0)'));
                $svg->addPath(self::LEFT_N_OUTLINE_R, array('fill' => $n_main_color, 'transform' => 'translate(50.5 0.1)'));

                $svg->addPath(self::RIGHT_CLOVER_FILL, array('fill' => $clover_color, 'transform' => 'translate(144.6758,24.75) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_1, array('fill' => $clover_color, 'transform' => 'translate(140.91,34.26) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_2, array('fill' => $clover_color, 'transform' => 'translate(140.737,33.5) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_3, array('fill' => $clover_color, 'transform' => 'translate(141.0319,32.28) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_4, array('fill' => $clover_color, 'transform' => 'translate(142.26,31.9) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_5, array('fill' => $clover_color, 'transform' => 'translate(143.3116,30.35) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_6, array('fill' => $clover_color, 'transform' => 'translate(143.4054,29.43) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_7, array('fill' => $clover_color, 'transform' => 'translate(143.971,28.3368) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_LETTER_8, array('fill' => $clover_color, 'transform' => 'translate(144.4453,28.0718) rotate(180) scale(-1,1)'));
                $svg->addPath(self::RIGHT_CLOVER_H_1, array('fill' => $clover_h_color, 'transform' => 'translate(56, 0)'));
                $svg->addPath(self::RIGHT_CLOVER_H_2, array('fill' => $clover_h_color, 'transform' => 'translate(56, 0)'));
                $svg->addPath(self::RIGHT_CLOVER_H_3, array('fill' => $clover_h_color, 'transform' => 'translate(56, 0)'));
                $svg->addPath(self::RIGHT_CLOVER_H_4, array('fill' => $clover_h_color, 'transform' => 'translate(56, 0)'));

                $svg->addPath(self::CENTER_DIVIDER, array('fill' => $secondary_text_color, 'transform' => 'translate(50.5 0.1)', 'stroke' => $secondary_text_color, 'stroke-width' => '0.5pt'));
            } else {
                $svg->addPath(self::VERT_N_R_CIRCLE, array('fill' => $n_main_color));
                if (!($style == 'blk' && $rev)) {
                    $svg->addPath(self::VERT_N_R_FILL, array('fill' => $n_secondary_color));
                    $svg->addPath(self::VERT_N_SERIF, array('fill' => $n_secondary_color));
                }
                $svg->addPath(self::VERT_N_FILL, array('fill' => $n_main_color));
                $svg->addPath(self::VERT_N_OUTLINE_R, array('fill' => $n_main_color));
            }
        }
        return $svg->asXML();
    }

}
