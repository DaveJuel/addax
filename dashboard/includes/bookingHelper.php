<?php

/**
 * This is the helper class for booking
 * @author David NIWEWE 
 */
class EXBookingHelper
{

    private $adminPhone = "250788353869";

    public function notifyWithSMS($bookingRequest)
    {
        $checkIn = $bookingRequest['check_in'];
        $checkOut = $bookingRequest['check_out'];
        $customerName = $bookingRequest['name'];
        $customerEmail = $bookingRequest['email'];
        $customerPhone = $bookingRequest['phone'];
        $accomodationPhone = $this->getAccomodationPhone($bookingRequest['accomodation']);
        $room = $bookingRequest['room'];
        $message = $customerName . " has requested to book room " . $room . " from " . $checkIn . " to " . $checkOut . " EMAIL:" . $customerEmail . ",PHONE:" . $customerPhone;
        $smsKey = new sms();
        if (NULL !== $accomodationPhone) {
            $recipient = $this->adminPhone . ";" . $accomodationPhone;
        } else {
            $recipient = $this->adminPhone;
        }

        $smsKey->send($recipient, "Booking", $message);
    }

    private function getAccomodationPhone(string $accomodationName)
    {
        $phoneNumber = NULL;
        try {
            $phoneNumber = R::getCell("SELECT DISTINCT phone FROM accomodation WHERE name='$accomodationName' LIMIT 1");
        } catch (Exception $exc) {
            error_log("ERROR:(EXBookingHelper:getAccomodationPhone)" . $exc);
        }
        return $phoneNumber;
    }
}