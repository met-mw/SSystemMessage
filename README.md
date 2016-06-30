[![Build Status](https://travis-ci.org/met-mw/SSystemMessage.svg?branch=master)](https://travis-ci.org/met-mw/SSystemMessage)
[![Coverage Status](https://coveralls.io/repos/github/met-mw/SSystemMessage/badge.svg?branch=master)](https://coveralls.io/github/met-mw/SSystemMessage?branch=master)
[![Latest Stable Version](https://poser.pugx.org/met_mw/ssystemmessage/v/stable)](https://packagist.org/packages/met_mw/ssystemmessage)
[![Latest Unstable Version](https://poser.pugx.org/met_mw/ssystemmessage/v/unstable)](https://packagist.org/packages/met_mw/ssystemmessage)
[![Total Downloads](https://poser.pugx.org/met_mw/ssystemmessage/downloads)](https://packagist.org/packages/met_mw/ssystemmessage)
[![License](https://poser.pugx.org/met_mw/ssystemmessage/license)](https://packagist.org/packages/met_mw/ssystemmessage)
# SSystemMessage
Simple system messages for web-applications.

## Install
```
composer require met_mw/ssystemmessage
```

## example

### System messages
```
SystemMessage::i()
    ->addDanger('Error!')
    ->addInfo('Information.')
    ->addSuccess('Success!')
    ->addWarning('Warning!');
    
echo '<h1>System messages.</h1>';
SystemMessage::i()->printAll();
```

### System messages with using session.
This method needs for send or print messages in any pages.
```
SystemMessageSession::i()
    ->addDanger('Error!')
    ->addInfo('Information.')
    ->addSuccess('Success!')
    ->addWarning('Warning!');


echo '<h1>System messages with using session.</h1>';
SystemMessageSession::i()->printAll();
```

## License
The met-mw/SSystemMessage package is open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**