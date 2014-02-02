/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.wunderlist;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

/**
 *
 * @author luigi
 */
@Stateless
public class SubtaskFacade extends AbstractFacade<Subtask> {
    @PersistenceContext(unitName = "AprendiendoJEEPU")
    private EntityManager em;

    @Override
    protected EntityManager getEntityManager() {
        return em;
    }

    public SubtaskFacade() {
        super(Subtask.class);
    }
    
}
