require "rsolr"
require './config/solr_conf.rb'
class SolrController < ApplicationController
  def index
  solr = RSolr.connect :url => "http://#$host:8983/solr"
    if solr.head("admin/ping").response[:status] == 200
      @result =   "succeeded"
    end
  end
end
