<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | A list of notification type IDs and the messages associated with them.
    |
    */

    // CURRENCY_GRANT
    0 => [
        'name' => 'Currency Grant',
        'message' => 'You have received a staff grant of {currency_quantity} {currency_name} from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Bank</a>)',
        'url' => 'bank'
    ],

    // ITEM_GRANT
    1 => [
        'name' => 'Item Grant',
        'message' => 'You have received a staff grant of {item_name} (×{item_quantity}) from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Inventory</a>)',
        'url' => 'inventory'
    ],
    
    // CURRENCY_REMOVAL
    2 => [
        'name' => 'Currency Removal',
        'message' => '{currency_quantity} {currency_name} was removed from your bank by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Bank</a>)',
        'url' => 'bank'
    ],

    // ITEM_REMOVAL
    3 => [
        'name' => 'Item Removal',
        'message' => '{item_name} (×{item_quantity}) was removed from your inventory by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Inventory</a>)',
        'url' => 'inventory'
    ],

    // CURRENCY_TRANSFER
    4 => [
        'name' => 'Currency Transfer',
        'message' => 'You have received {currency_quantity} {currency_name} from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Bank</a>)',
        'url' => 'bank'
    ],

    // ITEM_TRANSFER
    5 => [
        'name' => 'Item Transfer',
        'message' => 'You have received {item_name} (×{item_quantity}) from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Inventory</a>)',
        'url' => 'inventory'
    ],

    // FORCED_ITEM_TRANSFER
    6 => [
        'name' => 'Forced Item Transfer',
        'message' => '{item_name} (×{item_quantity}) was transferred out of your inventory by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Inventory</a>)',
        'url' => 'inventory'
    ],

    // CHARACTER_UPLOAD
    7 => [
        'name' => 'Character Upload',
        'message' => 'A new character (<a href="{character_url}">{character_slug}</a>) has been uploaded for you. (<a href="{url}">View Characters</a>)',
        'url' => 'characters'
    ],

    // CHARACTER_CURRENCY_GRANT
    8 => [
        'name' => 'Character Currency Grant',
        'message' => '{character_name} has received a staff grant of {currency_quantity} {currency_name} from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Bank</a>)',
        'url' => 'character/{character_slug}/bank'
    ],
    
    // CHARACTER_CURRENCY_REMOVAL
    9 => [
        'name' => 'Character Currency Removal',
        'message' => '{currency_quantity} {currency_name} was removed from {character_name} by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Bank</a>)',
        'url' => 'character/{character_slug}/bank'
    ],
    
    // CHARACTER_PROFILE_EDIT
    10 => [
        'name' => 'Character Profile Edited',
        'message' => '{character_name}\'s profile was edited by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Character</a>)',
        'url' => 'character/{character_slug}/profile'
    ],
    
    // IMAGE_UPLOAD
    11 => [
        'name' => 'Image Upload',
        'message' => 'A new image for {character_name} was uploaded by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Character</a>)',
        'url' => 'character/{character_slug}/images'
    ],

    // CHARACTER_TRANSFER_RECEIVED
    12 => [
        'name' => 'Character Transfer Received',
        'message' => 'You have received a transfer for <a href="{character_url}">{character_name}</a> from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Transfers</a>)',
        'url' => 'characters/transfers/incoming'
    ],

    // CHARACTER_TRANSFER_REJECTED
    13 => [
        'name' => 'Character Transfer Rejected',
        'message' => 'Your transfer request for <a href="{character_url}">{character_name}</a> was rejected by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Transfers</a>)',
        'url' => 'characters/transfers/completed'
    ],

    // CHARACTER_TRANSFER_CANCELED
    14 => [
        'name' => 'Character Transfer Cancelled',
        'message' => 'The transfer for <a href="{character_url}">{character_name}</a> was canceled by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Transfers</a>)',
        'url' => 'characters/transfers/completed'
    ],

    // CHARACTER_TRANSFER_DENIED
    15 => [
        'name' => 'Character Transfer Denied',
        'message' => 'Your transfer request for <a href="{character_url}">{character_name}</a> was denied by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Transfers</a>)',
        'url' => 'characters/transfers/completed'
    ],

    // CHARACTER_TRANSFER_ACCEPTED
    16 => [
        'name' => 'Character Transfer Accepted',
        'message' => 'Your transfer request for <a href="{character_url}">{character_name}</a> was accepted by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Transfers</a>)',
        'url' => 'characters/transfers/completed'
    ],

    // CHARACTER_TRANSFER_APPROVED
    17 => [
        'name' => 'Character Transfer Approved',
        'message' => 'The transfer for <a href="{character_url}">{character_name}</a> was approved by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Transfers</a>)',
        'url' => 'characters/transfers/completed'
    ],

    // CHARACTER_SENT
    18 => [
        'name' => 'Character Sent',
        'message' => '{character_name} was transferred to <a href="{recipient_url}">{recipient_name}</a> by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Character</a>)',
        'url' => 'character/{character_slug}'
    ],

    // CHARACTER_RECEIVED
    19 => [
        'name' => 'Character Received',
        'message' => '{character_name} was transferred to you by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Character</a>)',
        'url' => 'character/{character_slug}'
    ],

    // SUBMISSION_APPROVED
    20 => [
        'name' => 'Submission Approved',
        'message' => 'Your submission (#{submission_id}) was approved by <a href="{staff_url}">{staff_name}</a>. (<a href="{url}">View Submission</a>)',
        'url' => 'submissions/view/{submission_id}'
    ],

    // SUBMISSION_REJECTED
    21 => [
        'name' => 'Submission Rejected',
        'message' => 'Your submission (#{submission_id}) was rejected by <a href="{staff_url}">{staff_name}</a>. (<a href="{url}">View Submission</a>)',
        'url' => 'submissions/view/{submission_id}'
    ],

    // CLAIM_APPROVED
    22 => [
        'name' => 'Claim Approved',
        'message' => 'Your claim (#{submission_id}) was approved by <a href="{staff_url}">{staff_name}</a>. (<a href="{url}">View Claim</a>)',
        'url' => 'claims/view/{submission_id}'
    ],

    // CLAIM_REJECTED
    23 => [
        'name' => 'Claim Rejected',
        'message' => 'Your claim (#{submission_id}) was rejected by <a href="{staff_url}">{staff_name}</a>. (<a href="{url}">View Claim</a>)',
        'url' => 'claims/view/{submission_id}'
    ],

    // MYO_GRANT
    24 => [
        'name' => 'MYO Grant',
        'message' => 'A new MYO slot (<a href="{character_url}">{name}</a>) has been created for you. (<a href="{url}">View MYO Slots</a>)',
        'url' => 'myos'
    ],

    // DESIGN_APPROVED
    25 => [
        'name' => 'Design Update Approved',
        'message' => 'The <a href="{design_url}">design update</a> for <a href="{character_url}">{name}</a> has been approved. (<a href="{url}">View Design Approvals</a>)',
        'url' => 'designs/approved'
    ],

    // DESIGN_REJECTED
    26 => [
        'name' => 'Design Update Requested',
        'message' => 'The <a href="{design_url}">design update</a> for <a href="{character_url}">{name}</a> has been rejected. (<a href="{url}">View Design Approvals</a>)',
        'url' => 'designs/rejected'
    ],

    // DESIGN_CANCELED
    27 => [
        'name' => 'Design Update Cancelled',
        'message' => 'The <a href="{design_url}">design update</a> for <a href="{character_url}">{name}</a> has been canceled. (<a href="{url}">View Design Approvals</a>)',
        'url' => 'designs'
    ],

    // TRADE_RECEIVED
    28 => [
        'name' => 'Trade Received',
        'message' => 'You have received a new trade from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Trade</a>)',
        'url' => 'trades/{trade_id}'
    ],

    // TRADE_UPDATE
    29 => [
        'name' => 'Trade Updated',
        'message' => '<a href="{sender_url}">{sender_name}</a> has updated their half of a trade. (<a href="{url}">View Trade</a>)',
        'url' => 'trades/{trade_id}'
    ],

    // TRADE_CANCELED
    30 => [
        'name' => 'Trade Cancelled',
        'message' => '<a href="{sender_url}">{sender_name}</a> has canceled a trade. (<a href="{url}">View Trade</a>)',
        'url' => 'trades/{trade_id}'
    ],

    // TRADE_COMPLETED
    31 => [
        'name' => 'Trade Completed',
        'message' => 'A trade has been completed. (<a href="{url}">View Trade</a>)',
        'url' => 'trades/{trade_id}'
    ],

    // TRADE_REJECTED
    32 => [
        'name' => 'Trade Rejected',
        'message' => 'A trade has been rejected from the character transfer queue. (<a href="{url}">View Trade</a>)',
        'url' => 'trades/{trade_id}'
    ],

    // TRADE_CONFIRMED
    33 => [
        'name' => 'Trade Confirmed',
        'message' => 'A trade has been confirmed and placed in the character transfer queue to be reviewed. (<a href="{url}">View Trade</a>)',
        'url' => 'trades/{trade_id}'
    ],

    // BOOKMARK_TRADING
    34 => [
        'name' => 'Bookmark Trading Status',
        'message' => 'A character you have bookmarked (<a href="{character_url}">{character_name}</a>) has had its Open For Trading status changed. (<a href="{url}">View Bookmarks</a>)',
        'url' => 'account/bookmarks'
    ],

    // BOOKMARK_GIFTS
    35 => [
        'name' => 'Bookmark Gift Art Status',
        'message' => 'A character you have bookmarked (<a href="{character_url}">{character_name}</a>) has had its Gift Art Allowed status changed. (<a href="{url}">View Bookmarks</a>)',
        'url' => 'account/bookmarks'
    ],

    // BOOKMARK_OWNER
    36 => [
        'name' => 'Bookmark Owner',
        'message' => 'A character you have bookmarked (<a href="{character_url}">{character_name}</a>) has been transferred to a different owner. (<a href="{url}">View Bookmarks</a>)',
        'url' => 'account/bookmarks'
    ],

    // BOOKMARK_IMAGE
    37 => [
        'name' => 'Bookmark Image',
        'message' => 'A new image has been uploaded for a character you have bookmarked (<a href="{character_url}">{character_name}</a>). (<a href="{url}">View Bookmarks</a>)',
        'url' => 'account/bookmarks'
    ],

    // Technically this was acceptable before this point
    // CHARACTER_TRANSFER_ACCEPTABLE
    38 => [
        'name' => 'Character Transfer Acceptable',
        'message' => 'The transfer for <a href="{character_url}">{character_name}</a> was approved by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Transfers</a>)',
        'url' => 'characters/transfers/incoming'
    ],
    // Comment made on user's model
    // COMMENT_MADE
    239 => [
        'name' => 'Comment Made',
        'message' => '<a href="{sender_url}">{sender}</a> has made a comment on {post_type}. <a href="{comment_url}">See Context.</a>',
        'url' => ''
    ],
    // Comment recieved reply
    // COMMENT_REPLY
    240 => [
        'name' => 'Comment Reply',
        'message' => '<a href="{sender_url}">{sender}</a> has made a reply to your comment. <a href="comment/{comment_url}">See Reply.</a>',
        'url' => ''
    ],
    // CHARACTER_ITEM_GRANT
    501 => [
        'name' => 'Character Item Grant',
        'message' => '{character_name} has received a staff grant of {item_name} (×{item_quantity}) from <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Inventory</a>)',
        'url' => 'character/{character_slug}/inventory'
    ],

    // CHARACTER_ITEM_REMOVAL
    502 => [
        'name' => 'Character Item Removal',
        'message' => '{item_name} (×{item_quantity}) was removed from {character_name} by <a href="{sender_url}">{sender_name}</a>. (<a href="{url}">View Inventory</a>)',
        'url' => 'character/{character_slug}/inventory'
    ],
];