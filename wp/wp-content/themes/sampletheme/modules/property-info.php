<section class="property-info">
  <div class="l-container">
    <div class="property-info-wrapper">
      <h2 class="property-info-title">物件情報</h2>
      <!-- Property Information Table -->
      <?php
        $tableDatas = array(
          'propertyInfoDatas' => array (
            array(
              'column1Title' => array('物件番号'),
              'column1Description' => array('57140'),
              'column2Title' => array('業態'),
              'column2Description' => array('<a href="#">和食,居酒屋</a>'),
            ),
            array(
              'column1Title' => array('路線・駅名'),
              'column1Description' => array('東京メトロ丸の内線 <a href="#">四谷三丁目</a>'),
              'column2Title' => array('面積'),
              'column2Description' => array('20.16坪 / 66.65㎡'),
            ),
            array(
              'column1Title' => array('所在地'),
              'column1Description' => array('東京都新宿区四谷坂町 6-20'),
              'column2Title' => array('坪単価'),
              'column2Description' => array('16,765円'),
            ),
            array(
              'column1Title' => array('徒歩'),
              'column1Description' => array('8分'),
              'column2Title' => array('賃料'),
              'column2Description' => array('338,000円'),
            ),
            array(
              'column1Title' => array('保証金'),
              'column1Description' => array('2,800,000円'),
              'column2Title' => array(
                  '総額',
                  array(
                    'option' => 'rowspan="2"',
                    'spClass' => 'property-info-table-title-rowspan'
                  ),
              ),
              'column2Description' => array(
                '<span>4,790,000円</span> <small>※別途、保証会社保証料、火災保険料、印紙代を頂戴します。</small>',
                array(
                  'option' => 'rowspan="2"',
                  'spClass' => 'property-info-table-content-rowspan'
                ),
              ),
            ),
            array(
              'column1Title' => array('礼金'),
              'column1Description' => array('676,000円'),
            ),
            array(
              'column1Title' => array('契約期間'),
              'column1Description' => array('2年'),
              'column2Title' => array('共益費・管理費'),
              'column2Description' => array('なし'),
            ),
            array(
              'column1Title' => array('造作譲渡'),
              'column1Description' => array('300,000円(税抜)'),
              'column2Title' => array('更新料'),
              'column2Description' => array('507,000円'),
            ),
            array(
              'column1Title' => array('飲食条件'),
              'column1Description' => array('飲食可'),
              'column2Title' => array('構造'),
              'column2Description' => array('鉄筋コンクリート造陸屋根'),
            ),
            array(
              'column1Title' => array('席数'),
              'column1Description' => array('-'),
              'column2Title' => array('階建'),
              'column2Description' => array('7階建'),
            ),
            array(
              'column1Title' => array('業種制限'),
              'column1Description' => array('-'),
              'column2Title' => array(
                ' ',
                array(
                  'spClass' => 'property-info-table-column-blank'
                ),
              ),
              'column2Description' => array(
                ' ',
                array(
                  'spClass' => 'property-info-table-column-blank'
                ),
              ),
            ),
            array(
              'column1Title' => array('備考'),
              'column1Description' => array(
                '担当：冨張（080-4321-1372）/時間制限：深夜営業不可',
                array(
                  'option' => 'colspan="3"',
                  'spClass' => 'property-info-table-content-rowspan'
                ),
              ),
            ),
          )
        )
      ?>
      <?php importTemplate('modules/property-info-table', $tableDatas); ?>
      <!-- Property Information Table End -->

      <!-- start of message section -->
      <?php
        $notMemberMessage = array(
        'messageItems' => array(
          'messageItem' => array(
            'copy' => '会員登録ですべての物件情報が <br>ご覧いただけます。',
            'big-link-text' => '会員登録(無料・１分)をお願いします',
            'big-link' => 'javascript:;',
            'small-link-text' => 'ログインはこちら',
            'small-link' => 'javascript:;',
            'modifier' => 'property-info'
            )
          )
        );
      ?>
      <?php importTemplate('modules/message', $notMemberMessage); ?>
      <!-- end of message section -->

    </div>
  </div>
</section>
