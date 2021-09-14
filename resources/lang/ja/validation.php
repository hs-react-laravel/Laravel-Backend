<?php

return [
    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeには有効なURLを指定してください。',
    'after' => ':attributeには:date以降の日付を指定してください。',
    'after_or_equal' => ':attributeには:dateかそれ以降の日付を指定してください。',
    'alpha' => ':attributeには英字のみからなる文字列を指定してください。',
    'alpha_dash' => ':attributeは半角数値とダッシュ記号（–）、アンダースコア（_）以外指定できません。',
    'alpha_num' => ':attributeは半角数値以外指定できません。',
    'array' => ':attributeには配列を指定してください。',
    'before' => ':attributeは:dateよりも前の日付を指定してください。',
    'before_or_equal' => ':attributeには:dateかそれ以前の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeは:minから:maxまでの値しか指定できません。',
        'file' => ':attributeは:minから:maxキロバイトまでのファイルしか保存できません。',
        'string' => ':attributeは:min文字から:max文字までしか入力できません。',
        'array' => ':attributeは:min個から:max個までしか保存できません。',
    ],
    'boolean' => ':attributeには真偽値を指定してください。',
    'confirmed' => ':attributeが確認用の値と一致しません。',
    'date' => ':attributeには正しい形式の日付を指定してください。',
    'date_format' => '":format"という形式の日付を指定してください。',
    'different' => ':attributeには:otherとは異なる値を指定してください。',
    'digits' => ':attributeには:digits桁の数値を指定してください。',
    'digits_between' => ':attributeには:min〜:max桁の数値を指定してください。',
    'dimensions' => ':attributeの画像サイズが不正です。',
    'distinct' => '指定された:attributeは既に存在しています。',
    'email' => ':attributeには正しい形式のメールアドレスを指定してください。',
    'exists' => '選択された:attributeの値はご利用できません。',
    'file' => ':attributeにはファイルを指定してください。',
    'filled' => ':attributeには空でない値を指定してください。',
    'image' => ':attributeには画像ファイルを指定してください。',
    'in' => '選択された:attributeの値は正しくありません。',
    'in_array' => ':attributeが:otherに含まれていません。',
    'integer' => ':attributeは数値以外指定できません。',
    'ip' => ':attributeには正しい形式のIPアドレスを指定してください。',
    'ipv4' => ':attributeには正しい形式のIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには正しい形式のIPv6アドレスを指定してください。',
    'json' => ':attributeはJSON型以外指定できません。',
    'max' => [
        'numeric' => ':attributeに:max以上の値は指定できません。',
        'file' => ':attributeに:maxキロバイト以上のはファイルは指定できません。',
        'string' => ':attributeに:max文字以上の入力はできません。',
        'array' => ':attributeに:max個以上の項目は指定できません。',
    ],
    'mimes' => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'mimetypes' => ':attributeには:valuesのうちいずれかの形式のファイルを指定してください。',
    'min' => [
        'numeric' => ':attributeに:min以下の値は指定できません。',
        'file' => ':attributeに:minキロバイト以下のはファイルは指定できません。',
        'string' => ':attributeに:min文字以下の入力はできません。',
        'array' => ':attributeに:min個以下の項目は指定できません。',
    ],
    'not_in' => ':attributeには:valuesのうちいずれとも異なる値を指定してください。',
    'numeric' => ':attributeは数値以外指定できません。',
    'present' => ':attributeには現在時刻を指定してください。',
    'regex' => '正しい形式の:attributeを指定してください。',
    'required' => ':attributeは必須です。',
    'required_if' => ':attributeは:otherに:valueを指定した場合必須です。',
    'required_unless' => ':otherが:values以外の時:attributeは必須です。',
    'required_with' => ':attributeは:valuesを指定した場合必須です。',
    'required_without' => ':valuesを指定しない場合は、:attributeを指定してください。',
    'required_with_all' => ':valuesのうちすべてが指定された時:attributeは必須です。',
    'required_without_all' => ':valuesのうちすべてが指定されなかった時:attributeは必須です。',
    'same' => ':attributeと:otherが一致していません。',
    'size' => [
        'numeric' => ':attributeには:sizeを指定してください。',
        'file' => ':attributeには:size KBのファイルを指定してください。',
        'string' => ':attributeには:size文字の文字列を指定してください。',
        'array' => ':attributeには:size個の要素を持つ配列を指定してください。',
    ],
    'string' => ':attributeは文字列以外指定できません。',
    'timezone' => ':attributeには正しい形式のタイムゾーンを指定してください。',
    'unique' => '指定された:attributeの値は既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeには正しい形式のURLを指定してください。',
    'kana' => ':attributeはカタカナ以外使用できません。',
    'phone' => ':attributeの形式が正しくありません。',
    'postal' => ':attributeの形式が正しくありません。',
    'allowed_date' => ':attributeは指定できない日付です。',
    'less_then_or_equal_with_table' => ':attributeは:field以下の値しか指定できません。',
    'top_content' => [
        'not_in' => '指定された:attributeは登録済みです。',
        'raw_image_max' => ':attributeのサイズが大きすぎます。10MB以下のファイルを使用してください。',
    ],
    'plan' => [
        'not_in' => '指定された:attributeは登録済みです。',
    ],
    'coupon' => [
        'multiple_use' => 'ご利用中のクーポンに併用利用できないクーポンが含まれています。',
        'invalid_request' => 'ご指定のクーポンはご利用になれません。',
        'usage_amount_minimum' => '「:name」は:value円以上のご購入でご利用いただけます。',
        'usage_amount_maximum' => '「:name」は:value円以下のご購入でご利用いただけます。',
        'start_dt' => '「:name」は利用可能期間外です。',
        'end_dt' => '「:name」は利用可能期間外です。',
        'out_of_target_item' => '「:name」の適用対象商品がカート内にありません。',
    ],
    'closed_market' => [
        'stock_shortage' => 'ご指定の数量を確保する十分な在庫がありませんでした。',
        'aleady_sold' => '販売済みになった数量未満の数値を割り当てることは出来ません。',
        'aleady_secured' => '他の処理によって闇市在庫が確保されているため数量を減らすことが出来ませんでした。既に商品がカートへ投入されている場合などにこのエラーは発生します。',
    ],
    'item_bulk_upload' => [
        'csv_not_found' => 'CSVファイルが見つかりませんでした。',
        'image_not_found' => '指定されたファイルが見つかりませんでした。 (ファイル名: :name)',
        'zip_file_name_pattern' => 'ファイル名とフォルダ名には半角英数アンダースコア（_）しか使用できません。',
    ],
    'cart' => [
        'not_found' => 'カートが見つかりませんでした。',
        'max_if' => 'すでにカートの中に:type注文の商品が入っています。:type注文は、:max点ずつしかご購入いただけません。',
        'different_order_type' => 'カートの中に:type注文の商品が入っています。',
    ],
    'event' => [
        'product_date' => '売変開始日前に開始日が設定されています。',
    ],
    'purchase' => [
        'disabled_delivery_schedule' => ':type注文では配送日と配送時間帯のご指定は出来ません。',
    ],
    'guest_purchase' => [
        'not_found_cart' => 'カートが見つかりませんでした。',
        'expired_verification' => 'ご購入用のURLの有効期限が切れています。再度最初から登録手続きをお願い致します。',
    ],
    'changed_price' => '金額に変更がありました。金額をご確認の上もう一度追加をしてください。',
    'item_discount_rate_max' => '売変利率以上の:attributeは設定できません。',
    'invalid_member_id' => '会員IDと認証情報が一致しませんでした。',
    'invalid_cart_id' => 'カートIDと認証情報が一致しませんでした。',
    'amazon_pay' => [
        'constraint_buyer_equals_seller' => 'ご利用中のアカウントでAmazon Payをご利用になることはできません。',
        'constraint_payment_method_not_allowed' => '選択されたお支払い方法はご利用になれません。別のお支払い方法を選択ください。',
        'constraint_payment_plan_not_set' => 'お支払い方法を選択してください。',
        'constraint_shipping_address_not_set' => '配送先を設定してください。',
    ],
    'amazon_login' => [
        'invalid_token' => '情報を確認できませんでした。',
        'no_tied_account' => 'アカウント連携が完了していません。',
        'refresh_token_expired' => 'Amazonアカウントでログイン可能な有効期間を過ぎています。Amazonアカウントによるログインを再度有効にするためには、IDとパスワードを入力してログインしてください。',
    ],
    'amazon_pay' => [
        'invalid_payment_method_soft_decline' => 'お支払い方法に問題があり購入が完了できませんでした。再度お試しいただくと問題が解消される可能性があります。解消されない場合は別のお支払い方法をお試しください。',
        'invalid_payment_method_hard_decline' => '選択いただいたお支払い方法はご利用いただけません。別のお支払い方法をお試しください。',
        'amazon_rejected' => 'Amazon Payで購入手続きができませんでした。別のお支払い方法をご利用ください。',
        'processing_failure' => 'Amazonサービスとの通信中にエラーが発生しました。しばらくたってから再度お試しいただくと問題が解消される可能性があります。解消されない場合は別のお支払い方法をお試しください。',
        'transaction_timed_out' => '購入処理を時間内に完了できませんでした。再度お試しいただくと問題が解消される可能性があります。解消されない場合は別のお支払い方法をお試しください。',
        'update_billing_amount' => [
            \App\Enums\AmazonPay\ErrorCode::TransactionAmountExceeded => 'Amazon Payの承認金額を変更できませんでした。変更可能な上限金額を超えています。',
            \App\Enums\AmazonPay\ErrorCode::TransactionCountExceeded => 'Amazon Payの承認金額を変更できませんでした。オーソリの最大可能件数を超えています。',
        ],
        'refund' => [
            \App\Enums\AmazonPay\ErrorCode::TransactionAmountExceeded => 'Amazon Payの返金処理ができませんでした。返金可能な上限金額を超えています。',
            \App\Enums\AmazonPay\ErrorCode::TransactionCountExceeded => 'Amazon Payの返金処理ができませんでした。最大返金可能件数を超えています。',
        ],
    ],
    'order_detail' => [
        'ids' => [
            'min' => '商品点数を0件に以下に出来ません。注文自体をキャンセルす場合、受注詳細画面より「全キャンセル」を実行してください。',
        ],
    ],
    'np' => [
        'system_error' => 'システムエラーのため、NP後払いはご利用いただけません。ご迷惑をおかけしまして、大変申し訳ございません。',
        'maintenance' => 'メンテナンス中のため、現在NP後払いはご利用いただけません。しばらく時間をおいてからご利用ください。ご迷惑をおかけしまして、大変申し訳ございません。',
        'auth' => [
            // 購入者
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInCostomerName => '氏名にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::TooManyCharactersOfCostomerName => '氏名は全角21文字までしか入力できません。',
            \App\Enums\Np\ErrorCode\Transaction::TooManyCharactersOfCostomerKana => '氏名（カナ）は全角25文字までしか入力できません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInCostomerKana => '氏名（カナ）にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInZip => '郵便番号にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::IrrelevantZipAndAddress => '郵便番号と住所が一致していません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInAddress => '住所にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::TooManyCharactersOfAddress => '住所は全部で全角55文字までしか入力できません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidFormatTelephoneNumber1 => 'ご指定いただいた電話番号はご利用になれません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidFormatTelephoneNumber2 => 'ご指定いただいた電話番号はご利用になれません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidFormatTelephoneNumber3 => 'ご指定いただいた電話番号はご利用になれません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInEmail => 'メールアドレスにご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::TooManyCharactersOfEmail => '100文字以内のメールアドレスしかご利用になれません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidFormatEmail => 'ご指定いただいたメールアドレスはご利用になれません。',
            // 配送先
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInDestCostomerName => '配送先氏名にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::TooManyCharactersOfDestCostomerName => '配送先氏名は全角21文字までしか入力できません。',
            \App\Enums\Np\ErrorCode\Transaction::TooManyCharactersOfDestCostomerKana => '配送先氏名（カナ）は全角25文字までしか入力できません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInDestCostomerKana => '配送先氏名（カナ）にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInDestZip => '配送先郵便番号にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::IrrelevantZipAndDestAddress => '配送先郵便番号と住所が一致していません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidCharacterInDestAddress => '配送先住所にご利用になれない文字が含まれています。',
            \App\Enums\Np\ErrorCode\Transaction::TooManyCharactersOfDestAddress => '配送先住所は全部で全角55文字までしか入力できません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidFormatDestTelephoneNumber1 => 'ご指定いただいた配送先電話番号はご利用になれません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidFormatDestTelephoneNumber2 => 'ご指定いただいた配送先電話番号はご利用になれません。',
            \App\Enums\Np\ErrorCode\Transaction::InvalidFormatDestTelephoneNumber3 => 'ご指定いただいた配送先電話番号はご利用になれません。',
        ],
        'auth_ng' => [
            \App\Enums\Np\NGReasonCode::ExceededAmount => 'ご利用上限金額を超えているため、NP後払いをご利用いただけません。別の決済手段をご利用ください。詳細の確認をご希望の場合は、NPサポートデスクまでお問い合わせください。',
            \App\Enums\Np\NGReasonCode::InvalidInfomation => '情報不備がある可能性がございましたため、現時点ではNP後払いはご利用できません。別の決済手段をご利用ください。詳細の確認をご希望の場合は、お手数ですがNPサポートデスクまでお問い合わせください。',
            \App\Enums\Np\NGReasonCode::Other => '今回のご注文ではNP後払いをご利用いただけません。別の決済手段をご利用ください。詳細の確認をご希望の場合は、NPサポートデスクまでお問い合わせください。',
        ],
        'auth_pending' => '情報不備がある可能性がございましたため、現時点ではNP後払いはご利用できません。別の決済手段をご利用ください。詳細の確認をご希望の場合は、お手数ですがYAMADAYA online storeへお問い合わせください。',
        'admin' => [
            // 保留コードに応じたエラーメッセージ。
            // 更新時に与信結果が保留になった場合、他の決済種別へ変更するフローになっているが、今後対応が必要になる可能性もあるので残しておく。
            // 'auth_pending' => [
            //     \App\Enums\Np\PendingReasonCode::InsufficientAddressInformation => 'ご登録いただいたご住所、「:value」は、住所情報が不足している可能性がある為、ご確認をお願い致します。（1.建物名や部屋番号がある場合はご登録ください。2.会社名や店舗名は「会社名欄」にご登録ください。）',
            //     \App\Enums\Np\PendingReasonCode::ConfirmationAddress => '一時滞在先（ホテル等）への配送や、郵便局・コンビニ・運送会社の営業所で商品を受取る場合は、NP後払いはご利用いただけません。ご登録いただいたご住所、「:value」の購入者様の在籍状況をご確認ください。職員の利用である等、NP後払いのご利用可能対象である場合は、NPサポートデスクへその旨ご連絡ください。',
            //     \App\Enums\Np\PendingReasonCode::InsufficientDeliveryAddressInformation => 'ご登録いただいた配送先のご住所、「:value」は、住所情報が不足している可能性がある為、ご確認をお願い致します。（1.建物名や部屋番号がある場合はご登録ください。2.会社名や店舗名は「会社名欄」にご登録ください。）',
            //     \App\Enums\Np\PendingReasonCode::ConfirmationDeliveryAddress => '一時滞在先（ホテル等）への配送や、郵便局・コンビニ・運送会社の営業所で商品を受取る場合は、NP後払いはご利用いただけません。ご登録いただいたご住所、「:value」の購入者様の在籍状況をご確認ください。職員の利用である等、NP後払いのご利用可能対象である場合は、NPサポートデスクへその旨ご連絡ください。',
            //     \App\Enums\Np\PendingReasonCode::InvalidPhoneNumber => 'ご登録いただいた購入者様の電話番号は、弊社にて確認したところエラーとなっておりました。購入者様に正しい電話番号をご確認ください。',
            //     \App\Enums\Np\PendingReasonCode::InvalidDeliveryAddressPhoneNumber => 'ご登録いただいた配送先の電話番号は、弊社にて確認したところエラーとなっておりました。購入者様に正しい電話番号をご確認ください。',
            //     \App\Enums\Np\PendingReasonCode::Other => '  登録住所が私書箱宛、加盟店様従業員（自社取引）、サイト審査前、送料・手数料のみの請求、禁止商材（デジタルコンテンツ・動物・チケット・受講料等、弊社での加盟審査完了後に新たにお取扱を始めた場合を含みます。）、テスト登録の注文はご利用いただけない為、これらに該当する場合は取引をキャンセルしてください。',
            // ],
            'auth_pending' => '情報不備がある可能性がございましたため、現時点ではNP後払いはご利用できません。別の決済手段をご利用ください。',
            'error' => [
                \App\Enums\Np\ErrorCode\Transaction::MismatchBillingAmontAndItemPrice => 'NP後払いをご利用のご注文では、商品代金合計と顧客請求金額は、差額が3000円以内になるように設定してください。',
                \App\Enums\Np\ErrorCode\Transaction::AlreadyShipped => 'NP後払いでは取引内容の変更は出荷報告前までしかできません。',
                \App\Enums\Np\ErrorCode\Reregister::ExceededBaseTransactionBillingAmount => 'NP後払いでは元の取引の請求金額を上回る取引の再登録はできません。',
            ],
            'canceled_but_failed_reregister' => 'NP後払いの取引をキャンセルしましたが再登録に失敗しました。',
            'canceled_but_failed_reregister_with_reason' => 'NP後払いの取引をキャンセルしましたが再登録に失敗しました。エラー内容: :error',
        ],
        'reregister' => [
            'too_early_to_request' => 'NP後払いでの出荷後の一部返品処理は、出荷日の翌日以降からしか出来ません。',
        ],
    ],
    'card' => [
        'failed_reservation_sale' => '今回のご注文では入力いただきましたクレジットカードはご利用できません。 カードの裏面に記載のクレジットカード会社へご確認ください。',
        'not_found_saved_card_info' => '保存されたクレジットカード情報がありませんでした。クレジットカード情報を入力してください。',
        'invalid_card' => '入力情報が誤っています。',
        'expired_token' => '再度情報を入力してください。',
        'exceed_usage_limit' => '1日の利用回数、金額をオーバーしています。',
        'error' => [
            \App\Enums\FRegi\ErrorCode::ChagneAuthTooManyAmount => 'クレジットカードの承認金額を変更できませんでした。変更可能な上限金額を超えています。',
            \App\Enums\FRegi\ErrorCode::ChagneAuthTooSmallAmount => 'クレジットカードの承認金額を変更できませんでした。金額が小さすぎます。',
            \App\Enums\FRegi\ErrorCode::ChangeSaleTooManyAmount => 'クレジットカードの売上金額を変更できませんでした。変更可能な上限金額を超えています。',
            \App\Enums\FRegi\ErrorCode::ChangeSaleTooSmallAmount => 'クレジットカードの売上金額を変更できませんでした。金額が小さすぎます。',
        ],
    ],
    'payment_change_auth_amount' => '請求金額の変更ができませんでした。',
    'payment_refund' => '返品が出来ませんでした。',
    'payment_refund_partially' => '一部返品が出来ませんでした。',
    'payment_sync_update_destination' => '配送先の更新が出来ませんでした。',
    'failed_order_cancel' => 'ご注文のキャンセルができませんでした。',
    'attributes' => [
        'online_category_id' => 'オンライン分類ID',
        'online_category_id.*' => 'オンライン分類ID',
        'online_tag_id' => 'オンラインタグID',
        'online_tag_id.*' => 'オンラインタグID',
        'sales_type_id' => '販売タイプID',
        'recommend_item_id' => 'おすすめ商品ID',
        'favorite_count' => 'お気に入り数',
        'stock' => '在庫数',
        'total_stock' => '総在庫数',
        'page' => 'ページ番号',
        'per_page' => 'ページ表示件数',
        'sort' => '表示順',
        'created_at' => '作成日時',
        'updated_at' => '更新日時',
        'deleted_at' => '削除日時',
        'file_content' => 'ファイル',
        'date' => '日付',
        'admin_auth' => [
            'code' => 'コード',
            'passowrd' => 'パスワード',
        ],
        'size' => [
            'id' => 'サイズ番号',
            'name' => 'サイズ名称',
            'body' => 'サイズ情報',
        ],
        'color' => [
            'id' => '色番',
            'name' => '色名称',
            'color_panel' => 'カラーパネル',
            'display_name' => '表示名番名',
        ],
        'sales_type' => [
            'id' => '販売タイプID',
            'sort' => '表示順',
            'name' => '表示販売タイプ名',
            'text_color' => '文字色',
        ],
        'items' => [
            'item_id' => '商品詳細ID',
            'amount' => '数量',
        ],
        'item' => [
            'id' => '商品ID',
            'term_id' => '期ID',
            'season_id' => '季節記号',
            'organization_id' => '組織',
            'division_id' => '事業部',
            'department_id' => '部門番号',
            'product_number' => '事部品番',
            'product_number.*' => '事部品番',
            'maker_product_number' => 'メーカーコード品番',
            'maker_product_number.*' => 'メーカーコード品番',
            'fashion_speed' => 'ファッション速度',
            'name' => '商品名',
            'retail_price' => '上代',
            'price_change_period' => '売変利率期間',
            'price_change_rate' => '売変利率',
            'main_store_brand' => 'メインストアブランド',
            'brand_id' => '表示ブランド名',
            'display_name' => '表示商品名',
            'discount_rate' => '商品値引率',
            'is_member_discount' => '会員価格の有効・無効',
            'member_discount_rate' => '会員値引率',
            'point_rate' => 'ポイント付与率',
            'sales_period_from' => '販売期間(from)',
            'sales_period_to' => '販売期間(to)',
            'description' => '商品説明',
            'note_staff_ok' => '備考',
            'size_optional_info' => 'サイズ追加情報',
            'size_caution' => 'サイズに関する注意書き',
            'material_info' => '素材情報',
            'material_caution' => '素材に関する注意書き',
            'is_manually_setting_recommendation' => 'おすすめ商品の登録',
            'status' => '公開ステータス',
            'reserve_status' => '予約販売ステータス',
            'sales_status' => '販売ステータス',
            'returnable' => '返品可能',
            'q' => 'キーワード、商品番号',
            'image' => '商品画像',
        ],
        'item_detail' => [
            'id' => '商品詳細ID',
            'item_id' => '商品ID',
            'color_id' => '色番',
            'size_id' => 'サイズ番号',
            'ec_stock' => 'EC在庫数',
            'has_stock' => '在庫有無',
            'stock' => '店舗在庫数',
            'sort' => '表示順',
            'status' => '公開ステータス',
            'status_change_date' => '公開ステータス切替日時',
            'redisplay_requested' => '再入荷リクエスト',
            'last_sales_date' => '前回販売日時',
            'reservable_stock' => '予約可能在庫数',
            'dead_inventory_days' => '不動日数',
            'slow_moving_inventory_days' => '滞留日数',
            'containing_sales_status_stop' => '販売一時停止の商品を表示する',
            'containing_sales_status_sold_out' => '販売終了の商品を表示する',
            'item_detail_request_count' => '再入荷リクエスト数 (item_detail_requestsの件数)',
            'latest_added_stock' => '最新の在庫追加数 (item_detail_records.stockの最新の値)',
            'latest_stock_added_at' => '最新の在庫追加日時',
        ],
        'item_detail_identification' => [
            'item_detail_id' => '商品詳細ID',
            'jan_code' => 'JANコード',
            'ec_stock' => 'EC在庫数',
            'reservable_stock' => '予約可能在庫数',
            'dead_inventory_days' => '不動日数',
            'slow_moving_inventory_days' => '滞留日数',
            'latest_added_stock' => '最新の在庫追加数 (item_detail_records.stockの最新の値)',
            'latest_stock_added_at' => '最新の在庫追加日時',
            'arrival_date' => '入荷日',
        ],
        'item_sub_brand' => [
            'sub_store_brand' => 'サブストアブランド',
        ],
        'items_used_same_styling' => [
            'styling_id' => 'スタイリングID',
            'item_id' => '商品ID',
        ],
        'item_image' => [
            'id' => 'ID',
            'item_id' => '商品ID',
            'type' => '画像タイプ',
            'url' => '画像URL',
            'file_name' => '写真ファイル名',
            'caption' => '写真情報',
            'color_id' => '色番号',
            'sort' => '表示順',
        ],
        'closed_market' => [
            'id' => '闇市ID',
            'member_id' => '会員ID',
            'item_detail_id' => '商品詳細ID',
            'url' => 'URL',
            'title' => 'タイトル',
            'password' => 'パスワード',
            'num' => '個数',
            'limit_at' => '有効期限',
        ],
        'item_reserve' => [
            'id' => '商品予約販売ID',
            'is_enable' => '予約販売ステータス',
            'period_from' => '予約受け付け期間(開始)',
            'period_to' => '予約受け付け期間(終了)',
            'normal_sale_after_period' => '期間終了後の通常販売',
            'member_price' => '会員価格',
            'is_free_delivery' => '送料無料設定',
            'reserve_price' => '予約販売価格',
            'point_rate' => 'ポイント付与率',
            'limited_stock_threshold' => '予約在庫僅少表示閾値',
            'out_of_stock_threshold' => '予約在庫切れメール閾値',
            'expected_arrival_date' => '入荷予定日',
            'note' => '予約商品の注意書き',
        ],
        'event' => [
            'id' => 'イベントID',
            'title' => 'タイトル',
            'period_from' => '期間(from)',
            'period_to' => '期間(to)',
            'icon_id' => 'アイコンID',
            'target' => '対象商品計上 ',
            'sale_type' => 'セールタイプ',
            'target_user_type' => '対象ユーザータイプ',
            'discount_type' => '割引タイプ',
            'discount_rate' => '値引き率(一律)',
            'point_rate' => 'ポイント付与率',
            'published' => '公開・非公開',
            'event_bundle_sales' => 'バンドル販売情報',
        ],
        'event_bundle_sale' => [
            'count' => '数量',
            'rate' => '割引率',
        ],
        'order' => [
            'id' => '受注ID',
            'member_id' => '会員ID',
            'code' => '受注コード',
            'product_number' => '商品番号',
            'jan_code' => 'JANコード',
            'order_date' => '受注日時',
            'order_date_from' => '受注期間開始',
            'order_date_to' => '受注期間終了',
            'payment_type' => '決済種類',
            'delivery_type' => '配送種類',
            'delivery_token' => '配送先トークン',
            'delivery_hope_date' => '配送希望日',
            'delivery_hope_time' => '配送希望時間帯',
            'price' => '請求金額',
            'price_diff' => '金額変更',
            'discount_rate' => '値引率',
            'discount_memo' => '適用された割引の内訳',
            'tax' => '消費税',
            'fee' => '手数料',
            'use_coupon_ids' => '使用クーポン',
            'use_point' => '使用ポイント',
            'order_type' => '注文タイプ',
            'paid' => '入金ステータス',
            'paid_date' => '入金日時',
            'inspected' => '検品ステータス',
            'inspected_date' => '検品日時',
            'deliveryed' => '配送ステータス',
            'deliveryed_date' => '配送日時',
            'status' => '注文ステータス',
            'add_point' => '追加ポイント',
            'delivery_number' => '送り状番号',
            'delivery_company' => '運送会社',
            'sale_type' => 'プロパー/セール',
            'memo1' => '通信欄',
            'memo2' => 'お客様への連絡事項',
            'shop_memo' => 'ショップメモ',
            'member_name' => 'お客様名',
            'member_phone_number' => '電話番号',
            'member_email' => 'メールアドレス',
            'delivery_address' => [
                'lname' => 'お客様氏名（姓）',
                'fname' => 'お客様氏名（名）',
                'lkana' => 'お客様氏名（セイ）',
                'fkana' => 'お客様氏名（メイ）',
                'zip' => '郵便番号',
                'prefId' => '都道府県',
                'city' => '市区町村',
                'town' => '町名',
                'address' => '丁番地',
                'building' => '建物名',
                'tel' => '連絡先',
            ],
        ],
        'order_used_coupon' => [
            'id' => '使用済みクーポン管理ID',
            'coupon_id' => 'クーポンID',
            'discount_price' => '割引金額',
            'original_price' => '割引定期用前の金額',
        ],
        'order_detail' => [
            'id' => '受注詳細ID',
            'retail_price' => '上代',
            'price' => '販売価格',
            'item_detail_id' => '商品詳細ID',
            'amount' => '購入数',
            'discount_rate' => '値引率',
        ],
        'order_log' => [
            'log_memo' => '変更理由',
        ],
        'order_message' => [
            'id' => 'ID',
            'order_id' => '受注ID',
            'title' => 'タイトル',
            'body' => '本文',
        ],
        'event_item' => [
            'id' => 'イベント商品ID',
            'event_id' => 'events.id',
            'item_id' => 'items.id',
            'discount_rate' => '値引率',
        ],
        'event_user' => [
            'member_id' => '会員ID',
            'id' => 'イベント対象会員ID',
        ],
        'online_category' => [
            'id' => '番号',
            'parent_id' => '親ID',
            'root_id' => 'ルートカテゴリID',
            'level' => '階層',
            'name' => 'オンライン分類名',
            'sort' => '順序',
            'parent' => '親階層',
        ],
        'online_tag' => [
            'id' => '番号',
            'parent_id' => '親番号',
            'name' => 'タグ名',
            'sort' => '順序',
            'parent' => 'タグ分類',
        ],
        'delivery_setting' => [
            'id' => '配送料金設定ID',
            'delivery_condition' => '配送料割引条件',
            'delivery_price' => '配送料',
        ],
        'information' => [
            'id' => 'お知らせID',
            'title' => 'タイトル',
            'body' => '本文',
            'publish_at' => '公開日',
            'priority' => '優先度',
            'is_store_top' => 'ストアトップに掲載する',
            'excluded_id' => '詳細表示対象のお知らせID',
            'status' => '公開ステータス',
        ],
        'urgent_notice' => [
            'id' => '緊急お知らせID',
            'body' => '本文',
            'status' => '表示する',
        ],
        'staff' => [
            'id' => 'ID',
            'name' => 'スタッフ名',
            'token' => 'APIトークン',
            'role' => '権限',
        ],
        'admin_log' => [
            'staff_id' => 'スタッフID',
            'action' => '動作',
            'type' => 'ログタイプ',
            'url' => 'URL',
            'ip' => 'IPアドレス',
            'referer' => 'リファラ',
            'memo' => 'メモ',
        ],
        'item_bulk_upload' => [
            'id' => 'ID',
            'file_name' => 'アップロードファイル名',
            'upload_date' => 'アップロード日時',
            'format' => 'フォーマット',
            'status' => 'ステータス',
            'success' => '成功件数',
            'failure' => '失敗件数',
            'errors' => 'エラーリスト',
        ],
        'past_item' => [
            'id' => 'ID',
            'file_name' => 'アップロードファイル名',
            'upload_date' => 'アップロード日時',
            'format' => 'フォーマット',
            'status' => 'ステータス',
            'success' => '成功件数',
            'failure' => '失敗件数',
            'errors' => 'エラーリスト',
            'id' => '商品ID',
            'organization_id' => '組織',
            'division_id' => '事業部',
            'department_id' => '部門番号',
            'product_number' => '事部品番',
            'product_number.*' => '事部品番',
            'maker_product_number' => 'メーカーコード品番',
            'maker_product_number.*' => 'メーカーコード品番',
            'name' => '商品名',
            'retail_price' => '上代',
        ],
        'member' => [
            'id' => '会員ID',
            'token' => '会員トークン',
        ],
        'destination' => [
            'id' => '会員配送先住所ID',
            'lname' => '氏',
            'fname' => '名',
            'lkana' => '氏（カナ）',
            'fkana' => '名（カナ）',
            'tel' => '電話番号',
            'zip' => '郵便番号',
            'pref_id' => '都道府県',
            'city' => '市区町村',
            'town' => '町域',
            'address' => '番地',
            'building' => 'ビル・マンション名等',
            'billing_address_flag' => '請求先住所フラグ',
            'mail_dm' => 'メールマガジン',
            'post_dm' => '郵便DM',
        ],
        'page' => [
            'id' => 'ID',
            'slug' => 'ページURL',
            'title' => 'ページタイトル',
            'body' => '本文',
            'status' => '公開ステータス',
            'publish_from' => '公開開始日',
            'publish_to' => '公開終了日',
            'publish_to_prior_than_publish_from' => '公開終了日時よりも前の日時を指定してください。',
        ],
        'front_auth' => [
            'email' => 'メールアドレス',
            'passowrd' => 'パスワード',
            'keep_login' => 'ログイン状態を保持する',
        ],
        'amazon_auth' => [
            'member_token' => 'メンバートークン',
            'member_id' => 'メンバーID',
            'access_token' => 'アクセストークン',
        ],
        'change_email' => [
            'email' => 'メールアドレス',
            'email_confirmation' => 'メールアドレス確認',
            'success_url' => '成功URL',
            'error_url' => '失敗URL',
        ],
        'change_password' => [
            'password' => 'パスワード',
            'password_confirmation' => 'パスワード確認',
            'new_password' => '新しいパスワード',
        ],
        'remind_password' => [
            'email' => 'メールアドレス',
            'birthday' => '生年月日',
            'success_url' => '成功URL',
            'error_url' => '失敗URL',
            'password' => 'パスワード',
            'password_confirmation' => 'パスワード確認',
        ],
        'cart' => [
            'id' => 'カートID',
            'token' => 'トークン',
            'use_coupon_ids' => '適用クーポンID',
            'items' => [
                'count' => '商品数量',
            ],
            'member_id' => '会員ID',
        ],
        'purchase' => [
            'member' => [
                'lname' => 'お客様情報 氏',
                'fname' => 'お客様情報 名',
                'lkana' => 'お客様情報 氏（カナ）',
                'fkana' => 'お客様情報 名（カナ）',
                'tel' => 'お客様情報 電話番号',
                'zip' => 'お客様情報 郵便番号',
                'pref_id' => 'お客様情報 都道府県',
                'city' => 'お客様情報 市区町村',
                'town' => 'お客様情報 町域',
                'address' => 'お客様情報 番地',
                'building' => 'お客様情報 ビル・マンション名等',
            ],
            'cart' => 'カート',
            'destination' => 'お届け先',
            'delivery_type' => '配送会社種別',
            'delivery_hope_date' => '配送希望日',
            'delivery_hope_time' => '配送希望時間',
            'payment_type' => 'お支払い方法',
            'use_point' => 'ご利用ポイント',
            'card' => [
                'masked_pan' => 'クレジットカード決済 マスク化カード番号',
                'token' => 'クレジットカード決済 トークン',
                'validity' => 'クレジットカード決済 トークン有効期限',
                'payment_method' => 'クレジットカード決済 お支払い方法',
            ],
            'message' => [
                'type' => 'ご要望種類',
                'content' => 'ご要望内容',
            ],
            'order' => [
                'code' => '受注コード',
            ],
            'order_reference_id' => 'Amazon注文ID',
        ],
        'help' => [
            'id' => 'ヘルプID',
            'title' => 'タイトル',
            'body' => '本文',
            'sort' => '優先度',
            'is_faq' => 'よくある質問に掲載する',
            'helpCategories' => 'ヘルプカテゴリ',
            'status' => '公開ステータス',
        ],
        'help_category' => [
            'id' => '番号',
            'parent_id' => '親ID',
            'root_id' => 'ルートカテゴリID',
            'level' => '階層',
            'name' => 'ヘルプカテゴリ名',
            'sort' => '順序',
            'parent' => '親階層',
        ],
        'sales_aggregation_order' => [
            'date_from' => '開始日',
            'date_to' => '終了日',
            'by' => '集計軸',
            'unit' => '集計単位',
            'group1' => '集計分類1',
            'group2' => '集計分類2',
            'by_type' => '受注日 / 発送日',
            'total_price' => '売上金額',
            'total_amount' => '売上点数',
            'contracted_price' => '販売価格',
            'item_url' => '商品URL',
            'term' => '期間',
        ],
        'brand' => [
            'id' => '番号',
            'store_brand' => '表示ストアブランド',
            'section' => 'ブランド区分',
            'name' => 'ブランド名',
            'kana' => '読み(カナ)',
            'category' => '分類',
            'sort' => '表示順',
        ],
        'top_content' => [
            'main_store_brand' => 'ストアブランド',
            'item_id' => '商品ID',
            'status' => '公開状態',
            'background_color' => '特集の背景色',
            'plan_id' => '企画ID',
            'main_visual' => [
                'status' => '公開設定',
                'url' => 'URL',
                'pc_path' => 'PC用バナー',
                'pc_path_file_name' => 'PC用バナーファイル名',
                'pc_path_raw_image' => 'PC用バナーファイル',
                'sp_path' => 'SP用バナー',
                'sp_path_file_name' => 'SP用バナーファイル名',
                'sp_path_raw_image' => 'SP用バナーファイル',
            ],
            'sort' => [
                'old_index' => '古い表示順',
                'new_sort' => '新しい表示順',
            ],
        ],
        'plan' => [
            'title' => 'タイトル',
            'slug' => 'ページURL',
            'brand' => '表示ブランド',
            'place' => '表示箇所',
            'body' => 'ページ上部(pc/sp)',
            'status' => '公開ステータス',
            'period_from' => '開始日時',
            'period_to' => '終了日時',
            'is_item_setting' => '商品一覧を掲載する',
            'item_id' => '商品ID',
            'displayed_in_top' => 'この企画はTOP管理で表示設定中です。紐付けを解除してから保存してください。',
        ],
        'plan_thumbnail' => [
            'type' => 'サムネイル画像タイプ',
        ],
        'item_detail_redisplay_request' => [
            'id' => 'ID',
            'item_detail_id' => '商品詳細ID',
            'member_id' => '会員ID',
            'user_token' => 'ユーザートークン',
            'user_name' => '氏名',
            'email' => 'メールアドレス',
            'email_confirmation' => 'メールアドレス確認',
            'is_notified' => '通知済みフラグ',
        ],
        'guest_purchase' => [
            'email' => 'メールアドレス',
            'email_confirmation' => 'メールアドレス確認',
            'guest_token' => 'メール認証トークン',
        ],
        'store' => [
            'id' => 'ID',
            'code' => '店舗コード',
            'name' => '店舗名',
            'zip_code' => '郵便番号',
            'address1' => '住所1',
            'address2' => '住所2',
            'phone_number_1' => '電話番号1',
            'phone_number_2' => '電話番号2',
            'email' => 'メールアドレス',
            'location' => '緯度経度',
            'longitude' => '経度',
            'latitude' => '緯度',
            'has_stock' => '在庫有無',
            'q' => 'キーワード',
        ],
        'old_member' => [
            'pin' => [
                'card_id' => '会員コード',
                'pin_code' => 'PINコード',
            ],
            'check_mail' => [
                'email' => 'メールアドレス',
                'email_confirm' => 'メールアドレス（確認用）',
            ],
            'send_mail' => [
                'email' => 'メールアドレス',
            ],
        ],
        'content_image' => [
            'upload' => 'ファイル',
        ],
        'forget_all' => [
            'email' => 'メールアドレス',
            'tel' => '電話番号',
            'member_id' => '会員ID',
        ],
        'forget_mail' => [
            'lname' => '氏',
            'fname' => '名',
            'birthday' => '生年月日',
            'tel' => '電話番号',
        ],
        'withdraw' => [
            'reason' => '退会理由',
        ],
    ],
    'values' => [
        'discount_type' => \App\Enums\Event\DiscountType::toSelectArray(),
        'sale_type' => \App\Enums\Event\SaleType::toSelectArray(),
    ],
];