<?php

return [
    'admin' => [
        'admin.auth.login' => 'ログイン',
        'admin.auth.refresh' => 'トークンリフレッシュ',
        'admin.auth.logout' => 'ログアウト',
        'admin.auth.me' => 'スタッフ情報取得',
        'admin.auth.agentLogin' => '代理ログイン',
        'admin.item.index' => '商品情報一覧取得',
        'admin.item.show' => '商品情報取得',
        'admin.item.update' => '商品情報更新',
        'admin.item.updateStatus' => '商品ステータス更新',
        'admin.item.uploadImage' => '商品画像登録',
        'admin.item.deleteImage' => '商品画像削除',
        'admin.item.exportCsv' => '商品一覧CSVダウンロード',
        'admin.item.exportInfoCsv' => '商品情報一覧CSVダウンロード',
        'admin.item.exportImageCsv' => '商品画像一覧CSVダウンロード',
        'admin.item.showPreview' => '商品詳細プレビュー保存',
        'admin.item.storePreview' => '商品詳細プレビュー保存',
        'admin.closedMarket.index' => '闇市設定取得',
        'admin.closedMarket.store' => '闇市設定作成',
        'admin.closedMarket.update' => '闇市設定更新',
        'admin.closedMarket.destroy' => '闇市設定削除',
        'admin.itemReserve.show' => '商品予約設定取得',
        'admin.itemReserve.store' => '商品予約設定作成',
        'admin.itemReserve.update' => '商品予約設定更新',
        'admin.itemDetail.index' => 'SKU情報一覧取得',
        'admin.itemDetail.indexIdentifications' => '在庫情報一覧取得',
        'admin.itemDetail.exportCsv' => '商品詳細CSVダウンロード',
        'admin.itemDetail.indexByItemId' => '商品詳細 在庫情報一覧取得',
        'admin.color.index' => '色情報一覧取得',
        'admin.color.update' => '色情報更新',
        'admin.color.exportCsv' => '色情報CSVダウンロード',
        'admin.salesType.index' => '販売タイプ一覧取得',
        'admin.salesType.create' => '販売タイプ作成',
        'admin.salesType.update' => '販売タイプ更新',
        'admin.salesType.destroy' => '販売タイプ削除',
        'admin.salesType.exportCsv' => '販売タイプCSVダウンロード',
        'admin.event.index' => 'イベント情報一覧取得',
        'admin.event.show' => 'イベント情報取得',
        'admin.event.store' => 'イベント情報作成',
        'admin.event.copy' => 'イベント情報複製作成',
        'admin.event.update' => 'イベント情報更新',
        'admin.event.delete' => 'イベント削除',
        'admin.eventItem.index' => 'イベント商品情報一覧取得',
        'admin.eventItem.store' => 'イベント商品情報作成',
        'admin.eventItem.storeCsv' => 'イベント商品情報CSVアップロード',
        'admin.eventItem.update' => 'イベント商品情報更新',
        'admin.eventItem.destroy' => 'イベント商品情報削除',
        'admin.eventUser.index' => 'イベント対象ユーザー一覧取得',
        'admin.eventUser.storeCsv' => 'イベント対象ユーザーCSVアップロード',
        'admin.eventUser.destroy' => 'イベント対象ユーザー削除',
        'admin.icon.index' => 'アイコン情報取得',
        'admin.order.index' => '注文情報一覧取得',
        'admin.order.show' => '注文情報取得',
        'admin.order.update' => '注文情報更新',
        'admin.order.cancel' => '注文キャンセル',
        'admin.order.return' => '注文返品',
        'admin.order.addCoupon' => '注文へのクーポン追加適用',
        'admin.order.removeCoupon' => '注文からクーポン削除',
        'admin.order.updatePrice' => '注文請求金額変更',
        'admin.order.showMessage' => '注文メッセージ取得',
        'admin.order.sendMessage' => 'メッセージ送信',
        'admin.order.exportCsv' => '受注詳細情報_受注単位CSVダウンロード',
        'admin.order.exportDetailCsv' => '受注詳細情報_明細単位CSVダウンロード',
        'admin.orderDetail.index' => '注文内訳一覧取得',
        'admin.orderDetail.store' => '注文への商品追加登録',
        'admin.orderDetail.show' => '注文商品取得',
        'admin.orderDetail.cancel' => '注文商品キャンセル',
        'admin.orderDetail.indexItems' => '受注追加用商品検索',
        'admin.orderDetail.return' => '商品返品',
        'admin.salesAggregation.aggregateOrders' => '売上集計取得',
        'admin.salesAggregation.aggregateDailyOrder' => '受注日計上',
        'admin.salesAggregation.aggregateMonthlyOrder' => '昨日までの今月の累計売上',
        'admin.salesAggregation.aggregateItems' => '商品実績取得',
        'admin.salesAggregation.exportOrderCsv' => '売上集計_全体CSVダウンロード',
        'admin.salesAggregation.exportOrderDetailCsv' => '売上集計_商品込CSVダウンロード',
        'admin.salesAggregation.exportItemCsv' => '商品実績CSVダウンロード',
        'admin.master.indexEnums' => '定数マスタ取得',
        'admin.master.indexTerms' => '期間マスタ取得',
        'admin.master.indexPrefs' => '都道府県マスタ取得',
        'admin.master.indexDivisions' => '事業部マスタ取得',
        'admin.master.indexDepartments' => '部門マスタ取得',
        'admin.master.indexActionNames' => '動作名マスタ取得',
        'admin.master.indexOrganizations' => '組織マスタ取得',
        'admin.onlineCategory.index' => 'オンライン分類一覧取得',
        'admin.onlineCategory.store' => 'オンライン分類作成',
        'admin.onlineCategory.update' => 'オンライン分類更新',
        'admin.onlineCategory.destroy' => 'オンライン分類削除',
        'admin.onlineCategory.exportCsv' => 'オンライン分類CSVダウンロード',
        'admin.onlineTag.index' => 'オンラインタグ一覧取得',
        'admin.onlineTag.store' => 'オンラインタグ作成',
        'admin.onlineTag.update' => 'オンラインタグ更新',
        'admin.onlineTag.destroy' => 'オンラインタグ削除',
        'admin.onlineTag.exportCsv' => 'オンラインタグCSVダウンロード',
        'admin.deliverySetting.show' => '配送料金設定取得',
        'admin.deliverySetting.update' => '配送料金設定更新',
        'admin.brand.index' => 'ブランド一覧取得',
        'admin.brand.store' => 'ブランド新規作成',
        'admin.brand.show' => 'ブランド取得',
        'admin.brand.update' => 'ブランド更新',
        'admin.brand.destroy' => 'ブランド削除',
        'admin.brand.exportCsv' => 'ブランドCSVダウンロード',
        'admin.brand.updateSort' => 'ブランド順更新',
        'admin.information.index' => 'お知らせ一覧取得',
        'admin.information.store' => 'お知らせ作成',
        'admin.information.show' => 'お知らせ取得',
        'admin.information.update' => 'お知らせ更新',
        'admin.information.destroy' => 'お知らせ削除',
        'admin.information.showPreview' => 'お知らせプレビュー保存',
        'admin.information.storePreview' => 'お知らせプレビュー保存',
        'admin.urgentNotice.show' => '緊急お知らせ取得',
        'admin.urgentNotice.update' => '緊急お知らせ更新',
        'admin.adminLog.index' => '管理者ログ一覧取得',
        'admin.adminLog.exportCsv' => '管理者ログ一覧CSVダウンロード',
        'admin.staff.index' => 'スタッフ一覧取得',
        'admin.itemBulkUpload.index' => '商品一括登録CSVアップロード結果一覧取得',
        'admin.itemBulkUpload.storeItemCsv' => '商品情報一括登録CSVアップロード',
        'admin.itemBulkUpload.storeItemImages' => '商品画像一括登録CSVアップロード',
        'admin.itemBulkUpload.exportErrorCsv' => '商品一括登録CSVアップロードエラーリストダウンロード',
        'admin.itemBulkUpload.exportItemCsvFormat' => '商品一括登録CSVフォーマットダウンロード',
        'admin.itemBulkUpload.exportItemImageCsvFormat' => '商品画像一括登録CSVフォーマットダウンロード',
        'admin.page.index' => '静的ページ一覧取得',
        'admin.page.store' => '静的ページ新規作成',
        'admin.page.show' => '静的ページ取得',
        'admin.page.update' => '静的ページ更新',
        'admin.page.destroy' => '静的ページ削除',
        'admin.page.copy' => '静的ページ複製作成',
        'admin.plan.index' => '企画管理一覧取得',
        'admin.plan.store' => '企画管理新規作成',
        'admin.plan.show' => '企画管理取得',
        'admin.plan.update' => '企画管理更新',
        'admin.plan.destroy' => '企画管理削除',
        'admin.plan.copy' => '企画管理複製作成',
        'admin.plan.deleteItems' => '企画管理商品削除',
        'admin.plan.updateItemSetting' => '企画管理商品一覧表示設定変更',
        'admin.plan.addNewItems' => '企画管理商品追加',
        'admin.plan.showByStoreBrand' => '企画管理取得',
        'admin.member.indexAvailableCoupons' => '利用可能クーポン一覧取得',
        'admin.help.index' => 'ヘルプ一覧取得',
        'admin.help.store' => 'ヘルプ新規作成',
        'admin.help.show' => 'ヘルプ取得',
        'admin.help.update' => 'ヘルプ更新',
        'admin.help.destroy' => 'ヘルプ削除',
        'admin.helpCategory.index' => 'ヘルプカテゴリ一覧取得',
        'admin.helpCategory.store' => 'ヘルプカテゴリ作成',
        'admin.helpCategory.update' => 'ヘルプカテゴリ更新',
        'admin.helpCategory.destroy' => 'ヘルプカテゴリ削除',
        'admin.helpCategory.exportCsv' => 'ヘルプカテゴリCSVダウンロード',
        'admin.itemSort.index' => '商品優先度表示登録一覧取得',
        'admin.itemSort.store' => '商品優先度表示登録作成',
        'admin.itemSort.update' => '商品優先度表示登録更新',
        'admin.itemSort.destroy' => '商品優先度表示登録削除',
        'admin.pastItem.index' => '過去の商品取得',
        'admin.topContent.index' => 'トップ管理一覧取得',
        'admin.topContent.showByStoreBrand' => 'トップ管理取得',
        'admin.topContent.addMainVisuals' => 'トップ管理メインバナー追加',
        'admin.topContent.updateMainVisuals' => 'トップ管理メインバナー更新',
        'admin.topContent.deleteMainVisuals' => 'トップ管理メインバナー削除',
        'admin.topContent.updateStatusMainVisuals' => 'トップ管理メインバナーステータス更新',
        'admin.topContent.addNewItems' => 'トップ管理新着商品追加',
        'admin.topContent.updateNewItems' => 'トップ管理新着商品更新',
        'admin.topContent.deleteNewItems' => 'トップ管理新着商品削除',
        'admin.topContent.addPickups' => 'トップ管理おすすめ商品追加',
        'admin.topContent.updatePickups' => 'トップ管理おすすめ商品更新',
        'admin.topContent.deletePickups' => 'トップ管理おすすめ商品削除',
        'admin.topContent.updateBackgroundColor' => 'トップ管理特集の背景色更新',
        'admin.topContent.updateFeatures' => 'トップ管理特集更新',
        'admin.topContent.updateSortFeatures' => 'トップ管理特集ソート更新',
        'admin.topContent.updateNews' => 'トップ管理NEWS更新',
        'admin.topContent.updateSortNews' => 'トップ管理NEWSソート更新',
        'admin.styling.index' => 'スタイル一覧取得',
    ],
];